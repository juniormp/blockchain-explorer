<?php


namespace App\Domain\Explorer\Factories;


use App\Domain\Explorer\Models\CollectionsTransactionDTO;

class TransactionsCollectionFactory extends TransactionFactory
{
    public function buildCollection(array $response): CollectionsTransactionDTO {
        $collectionTransactions = new CollectionsTransactionDTO();
        $transactionsList = collect();

        foreach ($response['data'] as $transactionPayload){
            $transaction = $this->createTransaction($transactionPayload);
            $transactionsList->push($transaction);
        }

        $collectionTransactions
            ->setTransactions($transactionsList);

        return $collectionTransactions;
    }
}
