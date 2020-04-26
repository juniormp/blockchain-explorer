<?php


namespace App\Explorer\Domain;


class ForgedDTO
{
    /** @var int */
    private $reward;

    /** @var int */
    private $fee;

    /** @var int */
    private $total;

    /** @var int */
    private $amount;

    public function setReward (int $reward): ForgedDTO
    {
        $this->reward = $reward;
        return $this;
    }

    public function getReward(): int
    {
        return $this->reward;
    }

    public function setFee(int $fee): ForgedDTO
    {
        $this->fee = $fee;
        return $this;
    }

    public function getFee(): int
    {
        return $this->fee;
    }

    public function setTotal(int $total): ForgedDTO
    {
        $this->total = $total;
        return $this;
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function setAmount(int $amount): ForgedDTO
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }
}
