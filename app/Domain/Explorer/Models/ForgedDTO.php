<?php


namespace App\Domain\Explorer\Models;


class ForgedDTO
{
    /** @var int */
    public $reward;

    /** @var int */
    public $fee;

    /** @var int */
    public $total;

    /** @var int */
    public $amount;

    public function setReward (int $reward): ForgedDTO
    {
        $this->reward = $reward;
        return $this;
    }

    public function setFee(int $fee): ForgedDTO
    {
        $this->fee = $fee;
        return $this;
    }

    public function setTotal(int $total): ForgedDTO
    {
        $this->total = $total;
        return $this;
    }

    public function setAmount(int $amount): ForgedDTO
    {
        $this->amount = $amount;
        return $this;
    }
}
