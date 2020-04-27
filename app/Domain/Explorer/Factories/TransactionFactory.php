<?php


namespace App\Domain\Explorer\Factories;


use App\Domain\Explorer\Models\TimestampDTO;
use App\Domain\Explorer\Models\TransactionDTO;

class TransactionFactory
{
    public function createTransaction(array $response): TransactionDTO {
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
