<?php


namespace App\Http\Controllers;


use App\Domain\Explorer\Services\RetrieveTransactionsService;
use App\Infrastructure\ExternalData\Requests\TransactionRequestCommand;
use App\Infrastructure\ExternalData\Requests\WalletsRequestCommand;

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

        return json_encode($response, true);
    }

    public function transactionDetails(string $id): string {
        $request = new TransactionRequestCommand();
        $request->byId($id);
        $response = $this->retrieveTransactionsService->execute($request);
        $transaction = json_encode($response, true);

        return view('livewire.transaction-details', compact('transaction'));
    }

    public function walletTransactions(string $address): string {
        $request = new WalletsRequestCommand();
        $request->transactionsFromAddress($address);

        $response = $this->retrieveTransactionsService->execute($request);

        return json_encode($response, true);
    }
}
