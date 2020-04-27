<?php


namespace App\Domain\Explorer\Models;


class DelegateDTO
{
    /** @var string */
    private $username;

    /** @var string */
    private $address;

    /** @var string */
    private $publicKey;

    /** @var string */
    private $votes;

    /** @var int */
    private $rank;

    /** @var bool */
    private $isResigned;

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): DelegateDTO
    {
        $this->username = $username;
        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): DelegateDTO
    {
        $this->address = $address;
        return $this;
    }

    public function getPublicKey(): string
    {
        return $this->publicKey;
    }

    public function setPublicKey(string $publicKey): DelegateDTO
    {
        $this->publicKey = $publicKey;
        return $this;
    }

    public function getVotes(): string
    {
        return $this->votes;
    }

    public function setVotes(string $votes): DelegateDTO
    {
        $this->votes = $votes;
        return $this;
    }

    public function getRank(): int
    {
        return $this->rank;
    }

    public function setRank(int $rank): DelegateDTO
    {
        $this->rank = $rank;
        return $this;
    }

    public function isResigned(): bool
    {
        return $this->isResigned;
    }

    public function setIsResigned(bool $isResigned): DelegateDTO
    {
        $this->isResigned = $isResigned;
        return $this;
    }
}
