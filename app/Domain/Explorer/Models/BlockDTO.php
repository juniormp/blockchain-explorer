<?php


namespace App\Explorer\Domain;


class BlockDTO
{
    /** @var integer */
    private $id;

    /** @var integer */
    private $version;

    /** @var integer */
    private $height;

    /** @var integer */
    private $previous;

    /** @var ForgedDTO */
    private $forged;

    /** @var PayloadDTO */
    private $payload;

    /** @var GeneratorDTO */
    private $generator;

    /** @var string */
    private $signature;

    /** @var int */
    private $confirmations;

    /** @var int */
    private $transactions;

    /** @var TimestampDTO */
    private $timestamp;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): BlockDTO
    {
        $this->id = $id;
        return $this;
    }

    public function getVersion(): int
    {
        return $this->version;
    }

    public function setVersion(int $version): BlockDTO
    {
        $this->version = $version;
        return $this;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): BlockDTO
    {
        $this->height = $height;
        return $this;
    }

    public function getPrevious(): int
    {
        return $this->previous;
    }

    public function setPrevious(int $previous): BlockDTO
    {
        $this->previous = $previous;
        return $this;
    }

    public function getForged(): ForgedDTO
    {
        return $this->forged;
    }

    public function setForged(ForgedDTO $forged): BlockDTO
    {
        $this->forged = $forged;
        return $this;
    }

    public function getPayload(): PayloadDTO
    {
        return $this->payload;
    }

    public function setPayload(PayloadDTO $payload): BlockDTO
    {
        $this->payload = $payload;
        return $this;
    }

    public function getGenerator(): GeneratorDTO
    {
        return $this->generator;
    }

    public function setGenerator(GeneratorDTO $generator): BlockDTO
    {
        $this->generator = $generator;
        return $this;
    }

    public function getSignature(): string
    {
        return $this->signature;
    }

    public function setSignature(string $signature): BlockDTO
    {
        $this->signature = $signature;
        return $this;
    }

    public function getConfirmations(): int
    {
        return $this->confirmations;
    }

    public function setConfirmations(int $confirmations): BlockDTO
    {
        $this->confirmations = $confirmations;
        return $this;
    }

    public function getTransactions(): int
    {
        return $this->transactions;
    }

    public function setTransactions(int $transactions): BlockDTO
    {
        $this->transactions = $transactions;
        return $this;
    }

    public function getTimestamp(): TimestampDTO
    {
        return $this->timestamp;
    }

    public function setTimestamp(TimestampDTO $timestamp): BlockDTO
    {
        $this->timestamp = $timestamp;
        return $this;
    }
}
