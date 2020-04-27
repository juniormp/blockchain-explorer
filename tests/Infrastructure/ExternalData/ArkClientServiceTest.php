<?php


namespace Tests\Infrastructure\ExternalData;


use App\Infrastructure\ExternalData\ArkClientApi;
use App\Infrastructure\ExternalData\ArkClientService;
use App\Infrastructure\ExternalData\Exceptions\ArkClientApiException;
use App\Infrastructure\ExternalData\Requests\IOperationRequest;
use GuzzleHttp\Exception\TransferException;
use Mockery;
use Tests\TestCase;

class ArkClientServiceTest extends TestCase
{
    public function test_it_should_handle_request()
    {
        $arkClientApi = $this->createMock(ArkClientApi::class);
        $arkClientService = new ArkClientService($arkClientApi);
        $request = Mockery::mock(IOperationRequest::class);
        $expected = ["fake-response"];
        $action = "fake-action";

        $request->shouldReceive('getHttpAction')->andReturn($action);
        $arkClientApi->expects($this->once())->method('request')->with($action)
            ->willReturn($expected);

        $response = $arkClientService->handleRequest($request);

        $this->assertEquals($expected, $response);
    }

    public function test_it_throws_exception_when_there_is_an_error()
    {
        $arkClientApi = $this->createMock(ArkClientApi::class);
        $arkClientService = new ArkClientService($arkClientApi);
        $request = Mockery::mock(IOperationRequest::class);
        $action = "fake-action";

        $request->shouldReceive('getHttpAction')->andReturn($action);
        $arkClientApi->expects($this->once())->method('request')->with($action)
            ->willThrowException(new TransferException('fake-error'));

        $this->expectException(ArkClientApiException::class);
        $this->expectExceptionMessage('fake-error');

        $arkClientService->handleRequest($request);
    }
}
