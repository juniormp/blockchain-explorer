<?php


namespace Tests\Infrastructure\ExternalData;


use App\Infrastructure\ExternalData\ArkClientApi;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use Mockery;
use Tests\Support\ListBlocksMock;
use Tests\Support\ListTransactionsMock;
use Tests\TestCase;

class ArkClientApiTest extends TestCase
{
    public function test_it_should_list_blockchain_blocks(){
        $expected = ListBlocksMock::jsonResponse();
        $action = 'blocks';
        $httpClient = Mockery::mock(Client::class);
        $arkClientApi = new ArkClientApi($httpClient);
        $responseHttpClient = $this->createMock(Response::class);

        $httpClient->shouldReceive('get')->with($action)->andReturn($responseHttpClient);
        $responseHttpClient->expects($this->once())->method('getBody')->willReturn($expected);

        $response = $arkClientApi->listBlocks('blocks');

        $this->assertEquals(json_decode($expected, true), $response);
    }

    public function test_it_should_list_blockchain_transactions(){
        $expected = ListTransactionsMock::jsonResponse();
        $action = 'transactions';
        $httpClient = Mockery::mock(Client::class);
        $arkClientApi = new ArkClientApi($httpClient);
        $responseHttpClient = $this->createMock(Response::class);

        $httpClient->shouldReceive('get')->with($action)->andReturn($responseHttpClient);
        $responseHttpClient->expects($this->once())->method('getBody')->willReturn($expected);

        $response = $arkClientApi->listTransactions('transactions');

        $this->assertEquals(json_decode($expected, true), $response);
    }
}
