<?php


namespace App\Http\Controllers;


use App\Domain\Explorer\Services\RetrieveTransactionsService;
use App\Infrastructure\ExternalData\Requests\TransactionRequestCommand;

class TransactionsController extends Controller
{
    private $retrieveTransactionsService;

    public function __construct(RetrieveTransactionsService $retrieveTransactionsService)
    {
        $this->retrieveTransactionsService = $retrieveTransactionsService;
    }

    public function listTransactions(): string {
        $request = new TransactionRequestCommand();
        $response = $this->retrieveTransactionsService->execute($request);

        return json_encode($response->getTransactions(), true);
    }

    public function transactionDetails(string $id): string {
        $request = new TransactionRequestCommand();
        $request->byId($id);

        $response = $this->retrieveTransactionsService->execute($request);

        return json_encode($response, true);
    }
}
