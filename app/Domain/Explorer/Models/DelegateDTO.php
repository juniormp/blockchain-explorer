<?php


namespace App\Domain\Explorer\Models;


class DelegateDTO
{
    /** @var string */
    public $username;

    /** @var string */
    public $address;

    /** @var string */
    public $publicKey;

    /** @var string */
    public $votes;

    /** @var int */
    public $rank;

    /** @var bool */
    public $isResigned;

    public function setUsername(string $username): DelegateDTO
    {
        $this->username = $username;
        return $this;
    }

    public function setAddress(string $address): DelegateDTO
    {
        $this->address = $address;
        return $this;
    }

    public function setPublicKey(string $publicKey): DelegateDTO
    {
        $this->publicKey = $publicKey;
        return $this;
    }

    public function setVotes(string $votes): DelegateDTO
    {
        $this->votes = $votes;
        return $this;
    }

    public function setRank(int $rank): DelegateDTO
    {
        $this->rank = $rank;
        return $this;
    }

    public function setIsResigned(bool $isResigned): DelegateDTO
    {
        $this->isResigned = $isResigned;
        return $this;
    }
}
