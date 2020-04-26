<?php


namespace App\Domain\Explorer\Models;


class TransactionDTO
{
    /** @var string */
    private $id;

    /** @var string */
    private $blockId;

    /** @var int */
    private $version;

    /** @var int */
    private $type;

    /** @var int */
    private $typeGroup;

    /** @var string */
    private $amount;

    /** @var string */
    private $fee;

    /** @var string */
    private $sender;

    /** @var string */
    private $senderPublicKey;

    /** @var string */
    private $recipient;

    /** @var string */
    private $signature;

    /** @var int */
    private $confirmations;

    /** @var TimestampDTO */
    private $timestamp;

    /** @var string */
    private $nonce;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): TransactionDTO
    {
        $this->id = $id;
        return $this;
    }

    public function getBlockId(): string
    {
        return $this->blockId;
    }

    public function setBlockId(string $blockId): TransactionDTO
    {
        $this->blockId = $blockId;
        return $this;
    }

    public function getVersion(): int
    {
        return $this->version;
    }

    public function setVersion(int $version): TransactionDTO
    {
        $this->version = $version;
        return $this;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): TransactionDTO
    {
        $this->type = $type;
        return $this;
    }

    public function getTypeGroup(): int
    {
        return $this->typeGroup;
    }

    public function setTypeGroup(int $typeGroup): TransactionDTO
    {
        $this->typeGroup = $typeGroup;
        return $this;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): TransactionDTO
    {
        $this->amount = $amount;
        return $this;
    }

    public function getFee(): string
    {
        return $this->fee;
    }

    public function setFee(string $fee): TransactionDTO
    {
        $this->fee = $fee;
        return $this;
    }

    public function getSender(): string
    {
        return $this->sender;
    }

    public function setSender(string $sender): TransactionDTO
    {
        $this->sender = $sender;
        return $this;
    }

    public function getSenderPublicKey(): string
    {
        return $this->senderPublicKey;
    }

    public function setSenderPublicKey(string $senderPublicKey): TransactionDTO
    {
        $this->senderPublicKey = $senderPublicKey;
        return $this;
    }

    public function getRecipient(): string
    {
        return $this->recipient;
    }

    public function setRecipient(string $recipient): TransactionDTO
    {
        $this->recipient = $recipient;
        return $this;
    }

    public function getSignature(): string
    {
        return $this->signature;
    }

    public function setSignature(string $signature): TransactionDTO
    {
        $this->signature = $signature;
        return $this;
    }

    public function getConfirmations(): int
    {
        return $this->confirmations;
    }

    public function setConfirmations(int $confirmations): TransactionDTO
    {
        $this->confirmations = $confirmations;
        return $this;
    }

    public function getTimestamp(): TimestampDTO
    {
        return $this->timestamp;
    }

    public function setTimestamp(TimestampDTO $timestamp): TransactionDTO
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    public function getNonce(): string
    {
        return $this->nonce;
    }

    public function setNonce(string $nonce): TransactionDTO
    {
        $this->nonce = $nonce;
        return $this;
    }
}
