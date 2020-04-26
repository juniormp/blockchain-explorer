<?php


namespace Tests\Infrastructure\ExternalData;


use App\Infrastructure\ExternalData\ArkClientApi;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use Mockery;
use Tests\TestCase;

class ArkClientApiTest extends TestCase
{
    public function test_it_should_list_blockchain_blocks(){
        $expected = json_encode(['fake-param' => 'fake-value']);
        $action = 'fake-action';
        $httpClient = Mockery::mock(Client::class);
        $arkClientApi = new ArkClientApi($httpClient);
        $responseHttpClient = $this->createMock(Response::class);

        $httpClient->shouldReceive('get')->with($action)->andReturn($responseHttpClient);
        $responseHttpClient->expects($this->once())->method('getBody')->willReturn($expected);

        $response = $arkClientApi->request($action);

        $this->assertEquals(json_decode($expected, true), $response);
    }
}
