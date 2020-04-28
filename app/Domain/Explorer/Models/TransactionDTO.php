<?php


namespace App\Domain\Explorer\Models;


class TransactionDTO
{
    /** @var string */
    public $id;

    /** @var string */
    public $blockId;

    /** @var string */
    public $amount;

    /** @var string */
    public $fee;

    /** @var string */
    public $sender;

    /** @var string */
    public $recipient;

    /** @var int */
    public $confirmations;

    /** @var string */
    public $timestamp;

    /** @var string */
    public $nonce;

    public function setId(string $id): TransactionDTO
    {
        $this->id = $id;
        return $this;
    }

    public function setBlockId(string $blockId): TransactionDTO
    {
        $this->blockId = $blockId;
        return $this;
    }

    public function setAmount(string $amount): TransactionDTO
    {
        $this->amount = $amount;
        return $this;
    }

    public function setFee(string $fee): TransactionDTO
    {
        $this->fee = $fee;
        return $this;
    }

    public function setSender(string $sender): TransactionDTO
    {
        $this->sender = $sender;
        return $this;
    }

    public function setRecipient(string $recipient): TransactionDTO
    {
        $this->recipient = $recipient;
        return $this;
    }

    public function setConfirmations(int $confirmations): TransactionDTO
    {
        $this->confirmations = $confirmations;
        return $this;
    }

    public function setTimestamp(string $timestamp): TransactionDTO
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    public function setNonce(string $nonce): TransactionDTO
    {
        $this->nonce = $nonce;
        return $this;
    }
}
