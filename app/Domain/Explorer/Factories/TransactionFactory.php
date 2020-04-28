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
            ->setAmount($response['amount'])
            ->setFee($response['fee'])
            ->setSender($response['sender'])
            ->setRecipient($response['recipient'])
            ->setConfirmations($response['confirmations'])
            ->setTimestamp($response['timestamp']['human'])
            ->setNonce($response['nonce']);
    }
}
