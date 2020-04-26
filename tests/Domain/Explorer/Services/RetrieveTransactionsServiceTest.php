<?php


namespace Tests\Domain\Explorer\Services;


use App\Domain\Explorer\Factories\CollectionsTransactionFactory;
use App\Domain\Explorer\Models\CollectionsTransactionDTO;
use App\Domain\Explorer\Services\RetrieveTransactionsService;
use App\Infrastructure\ExternalData\ArkClientService;
use App\Infrastructure\ExternalData\Requests\ListTransactionsRequest;
use Tests\TestCase;

class RetrieveTransactionsServiceTest extends TestCase
{
    public function test_it_returns_transactions_list(){
        $arkClientService = $this->createMock(ArkClientService::class);
        $transactionFactory = $this->createMock(CollectionsTransactionFactory::class);
        $request = new ListTransactionsRequest();
        $transactionPayload = ["fake-payload-response"];
        $collectionBlocks = $this->createMock(CollectionsTransactionDTO::class);
        $service = new RetrieveTransactionsService($arkClientService, $transactionFactory, $request);

        $arkClientService->expects($this->once())->method('handleRequest')->with($request)
            ->willReturn($transactionPayload);
        $transactionFactory->expects($this->once())->method('buildCollection')->with($transactionPayload)
            ->willReturn($collectionBlocks);

        $response = $service->execute();

        $this->assertEquals($collectionBlocks, $response);
    }
}
