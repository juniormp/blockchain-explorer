<?php


namespace App\Domain\Explorer\Factories;


use App\Domain\Explorer\Models\CollectionsTransactionDTO;
use App\Domain\Explorer\Models\TimestampDTO;
use App\Domain\Explorer\Models\TransactionDTO;

class CollectionsTransactionFactory
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
            ->setNext($response['meta']['next'])
            ->setPrevious(!empty($response['meta']['previous']) ?: "")
            ->setSelf($response['meta']['self'])
            ->setFirst($response['meta']['first'])
            ->setLast($response['meta']['last'])
            ->setTransactions($transactionsList);

        return $collectionTransactions;
    }

    private function createTransaction(array $response): TransactionDTO {
        $transaction = new TransactionDTO();

        return $transaction
            ->setId($response['id'])
            ->setBlockId($response['blockId'])
            ->setVersion($response['version'])
            ->setType($response['type'])
            ->setTypeGroup($response['typeGroup'])
            ->setAmount($response['amount'])
            ->setFee($response['fee'])
            ->setSender($response['sender'])
            ->setSenderPublicKey($response['senderPublicKey'])
            ->setRecipient($response['recipient'])
            ->setSignature($response['signature'])
            ->setConfirmations($response['confirmations'])
            ->setTimestamp($this->createTimestamp($response['timestamp']))
            ->setNonce($response['nonce']);
    }

    private function createTimestamp(array $response): TimestampDTO {
        $timestamp = new TimestampDTO();

        return $timestamp
            ->setEpoch($response['epoch'])
            ->setUnix($response['unix'])
            ->setHuman($response['human']);
    }
}
