<?php


namespace App\Domain\Explorer\Models;


class BlockDTO
{
    /** @var string */
    public $id;

    /** @var integer */
    public $version;

    /** @var integer */
    public $height;

    /** @var string */
    public $previous;

    /** @var ForgedDTO */
    public $forged;

    /** @var PayloadDTO */
    public $payload;

    /** @var GeneratorDTO */
    public $generator;

    /** @var string */
    public $signature;

    /** @var int */
    public $confirmations;

    /** @var int */
    public $transactions;

    /** @var TimestampDTO */
    public $timestamp;

    public function setId(string $id): BlockDTO
    {
        $this->id = $id;
        return $this;
    }

    public function setVersion(int $version): BlockDTO
    {
        $this->version = $version;
        return $this;
    }

    public function setHeight(int $height): BlockDTO
    {
        $this->height = $height;
        return $this;
    }

    public function setPrevious(string $previous): BlockDTO
    {
        $this->previous = $previous;
        return $this;
    }

    public function setForged(ForgedDTO $forged): BlockDTO
    {
        $this->forged = $forged;
        return $this;
    }

    public function setPayload(PayloadDTO $payload): BlockDTO
    {
        $this->payload = $payload;
        return $this;
    }

    public function setGenerator(GeneratorDTO $generator): BlockDTO
    {
        $this->generator = $generator;
        return $this;
    }

    public function setSignature(string $signature): BlockDTO
    {
        $this->signature = $signature;
        return $this;
    }

    public function setConfirmations(int $confirmations): BlockDTO
    {
        $this->confirmations = $confirmations;
        return $this;
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
