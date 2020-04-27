<?php


namespace App\Domain\Explorer\Models;


class WalletDTO
{
    /** @var string */
    private $address;

    /** @var string */
    private $publicKey;

    /** @var string */
    private $nonce;

    /** @var string */
    private $balance;

    /** @var bool */
    private $isDelegate;

    /** @var bool */
    private $isResigned;

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): WalletDTO
    {
        $this->address = $address;
        return $this;
    }

    public function getPublicKey(): string
    {
        return $this->publicKey;
    }

    public function setPublicKey(string $publicKey): WalletDTO
    {
        $this->publicKey = $publicKey;
        return $this;
    }

    public function getNonce(): string
    {
        return $this->nonce;
    }

    public function setNonce(string $nonce): WalletDTO
    {
        $this->nonce = $nonce;
        return $this;
    }

    public function getBalance(): string
    {
        return $this->balance;
    }

    public function setBalance(string $balance): WalletDTO
    {
        $this->balance = $balance;
        return $this;
    }

    public function isDelegate(): bool
    {
        return $this->isDelegate;
    }

    public function setIsDelegate(bool $isDelegate): WalletDTO
    {
        $this->isDelegate = $isDelegate;
        return $this;
    }

    public function isResigned(): bool
    {
        return $this->isResigned;
    }

    public function setIsResigned(bool $isResigned): WalletDTO
    {
        $this->isResigned = $isResigned;
        return $this;
    }
}
