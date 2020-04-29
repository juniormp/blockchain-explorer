<?php


namespace App\Http\Controllers;


use App\Domain\Explorer\Services\RetrieveTransactionsService;
use App\Infrastructure\ExternalData\Requests\ListTransactionsRequest;

class TransactionsController extends Controller
{
    private $retrieveTransactionsService;

    public function __construct(RetrieveTransactionsService $retrieveTransactionsService)
    {
        $this->retrieveTransactionsService = $retrieveTransactionsService;
    }

    public function listTransactions(): string {
        $request = new ListTransactionsRequest();
        $response = $this->retrieveTransactionsService->execute($request);

        return json_encode($response->getTransactions(), true);
    }

    public function transactionDetails(string $id): string {
        $request = new ListTransactionsRequest();
        $request->withId($id);
        $response = $this->retrieveTransactionsService->execute($request);

        return json_encode($response, true);
    }
}
