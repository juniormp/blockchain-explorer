<?php


namespace App\Domain\Explorer\Models;


class BlockDTO
{
    /** @var string */
    public $id;

    /** @var integer */
    public $height;

    /** @var ForgedDTO */
    public $forged;

    /** @var string */ // username
    public $generator;

    /** @var int */
    public $confirmations;

    /** @var int */
    public $transactions;

    /** @var string */ // human
    public $timestamp;

    public function setId(string $id): BlockDTO
    {
        $this->id = $id;
        return $this;
    }

    public function setHeight(int $height): BlockDTO
    {
        $this->height = $height;
        return $this;
    }

    public function setForged(ForgedDTO $forged): BlockDTO
    {
        $this->forged = $forged;
        return $this;
    }

    public function setGenerator(string $generator): BlockDTO
    {
        $this->generator = $generator;
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

    public function setTimestamp(string $timestamp): BlockDTO
    {
        $this->timestamp = $timestamp;
        return $this;
    }
}
