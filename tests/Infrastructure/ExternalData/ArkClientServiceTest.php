<?php


namespace Tests\Infrastructure\ExternalData;


use App\Infrastructure\ExternalData\ArkClientApi;
use App\Infrastructure\ExternalData\ArkClientService;
use App\Infrastructure\ExternalData\Exceptions\ArkClientApiException;
use App\Infrastructure\ExternalData\Requests\ListBlocksRequest;
use GuzzleHttp\Exception\TransferException;
use Tests\TestCase;

class ArkClientServiceTest extends TestCase
{
    public function test_it_should_handle_list_blocks_request(){
        $arkClientApi = $this->createMock(ArkClientApi::class);
        $arkClientService = new ArkClientService($arkClientApi);
        $request = new ListBlocksRequest();
        $expected = ["fake-response"];

        $arkClientApi->expects($this->once())->method('listBlocks')->with($request::getHttpAction())
            ->willReturn($expected);

        $response = $arkClientService->handleListBlocks($request);

        $this->assertEquals($expected, $response);
    }

    public function test_it_throws_exception_when_there_is_an_error(){
        $arkClientApi = $this->createMock(ArkClientApi::class);
        $arkClientService = new ArkClientService($arkClientApi);
        $request = new ListBlocksRequest();

        $arkClientApi->expects($this->once())->method('listBlocks')->with($request::getHttpAction())
            ->willThrowException(new TransferException('error'));

        $this->expectException(ArkClientApiException::class);
        $this->expectExceptionMessage('error');

        $arkClientService->handleListBlocks($request);
    }
}
