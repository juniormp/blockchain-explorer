<?php


namespace App\Domain\Explorer\Factories;


use Illuminate\Support\Collection;

class TransactionsCollectionFactory extends TransactionFactory
{
    public function buildCollection(array $response): Collection {
        $transactionsList = collect();

        foreach ($response['data'] as $transactionPayload){
            $transaction = $this->createTransaction($transactionPayload);
            $transactionsList->push($transaction);
        }

        return $transactionsList;
    }
}
