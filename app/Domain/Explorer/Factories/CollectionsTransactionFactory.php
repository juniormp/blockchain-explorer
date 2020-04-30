<?php


namespace App\Domain\Explorer\Factories;


use App\Domain\Explorer\Models\CollectionsTransactionDTO;

class CollectionsTransactionFactory extends TransactionFactory
{
    public function buildCollection(array $response): CollectionsTransactionDTO {
        $collectionTransactions = new CollectionsTransactionDTO();
        $transactionsList = collect();

        foreach ($response['data'] as $transactionPayload){
            $transaction = $this->createTransaction($transactionPayload);
            $transactionsList->push($transaction);
        }

        $collectionTransactions
            ->setTotalCountIsEstimate($response['meta']['totalCountIsEstimate'])
            ->setCount($response['meta']['count'])
            ->setPageCount($response['meta']['pageCount'])
            ->setTotalCount($response['meta']['totalCount'])
            ->setPrevious(!empty($response['meta']['previous']) ?: "")
            ->setSelf($response['meta']['self'])
            ->setFirst($response['meta']['first'])
            ->setLast($response['meta']['last'])
            ->setTransactions($transactionsList);

        return $collectionTransactions;
    }
}
