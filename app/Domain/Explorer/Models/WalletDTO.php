<?php


namespace App\Domain\Explorer\Models;


class WalletDTO
{
    /** @var string */
    public $address;

    /** @var string */
    public $nonce;

    /** @var string */
    public $balance;

    /** @var string */
    public $vote;

    /** @var bool */
    public $isDelegate;

    /** @var bool */
    public $isResigned;

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): WalletDTO
    {
        $this->address = $address;
        return $this;
    }

    public function setNonce(string $nonce): WalletDTO
    {
        $this->nonce = $nonce;
        return $this;
    }

    public function setBalance(string $balance): WalletDTO
    {
        $this->balance = $balance;
        return $this;
    }

    public function setVote(string $vote): WalletDTO
    {
        $this->vote = $vote;
        return $this;
    }

    public function setIsDelegate(bool $isDelegate): WalletDTO
    {
        $this->isDelegate = $isDelegate;
        return $this;
    }

    public function setIsResigned(bool $isResigned): WalletDTO
    {
        $this->isResigned = $isResigned;
        return $this;
    }

    public function votingFor(): string
    {
        return $this->vote;
    }
}
