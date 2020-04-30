<?php


namespace Tests\Domain\Explorer\Services;


use App\Domain\Explorer\Factories\TransactionsCollectionFactory;
use App\Domain\Explorer\Models\TransactionDTO;
use App\Domain\Explorer\Services\RetrieveTransactionsService;
use App\Infrastructure\ExternalData\ArkClientService;
use App\Infrastructure\ExternalData\Requests\TransactionRequestCommand;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class RetrieveTransactionsServiceTest extends TestCase
{
    public function test_it_returns_transactions_list(){
        $arkClientService = $this->createMock(ArkClientService::class);
        $transactionFactory = $this->createMock(TransactionsCollectionFactory::class);
        $request = new TransactionRequestCommand();
        $transactionPayload = ["fake-payload-response", "fake-payload-response"];
        $collectionTransactions = $this->createMock(Collection::class);
        $service = new RetrieveTransactionsService($arkClientService, $transactionFactory);

        $arkClientService->expects($this->once())->method('handleRequest')->with($request)
            ->willReturn($transactionPayload);
        $transactionFactory->expects($this->once())->method('buildCollection')->with($transactionPayload)
            ->willReturn($collectionTransactions);

        $response = $service->execute($request);

        $this->assertEquals($collectionTransactions, $response);
    }

    public function test_it_returns_transaction(){
        $arkClientService = $this->createMock(ArkClientService::class);
        $transactionFactory = $this->createMock(TransactionsCollectionFactory::class);
        $request = new TransactionRequestCommand();
        $transactionPayload = [ "data" => ["fake-payload-response"]];
        $transaction = $this->createMock(TransactionDTO::class);
        $service = new RetrieveTransactionsService($arkClientService, $transactionFactory);

        $arkClientService->expects($this->once())->method('handleRequest')->with($request)
            ->willReturn($transactionPayload);
        $transactionFactory->expects($this->once())->method('createTransaction')->with($transactionPayload['data'])
            ->willReturn($transaction);

        $response = $service->execute($request);

        $this->assertEquals($transaction, $response);
    }
}
