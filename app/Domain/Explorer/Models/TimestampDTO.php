<?php


namespace App\Domain\Explorer\Models;


use Illuminate\Database\Eloquent\Model;

class TimestampDTO extends Model
{
    /** @var integer */
    private $epoch;

    /** @var integer */
    private $unix;

    /** @var string */
    private $human;

    public function getEpoch(): int
    {
        return $this->epoch;
    }

    public function setEpoch(int $epoch): TimestampDTO
    {
        $this->epoch = $epoch;
        return $this;
    }

    public function getUnix(): int
    {
        return $this->unix;
    }

    public function setUnix(int $unix): TimestampDTO
    {
        $this->unix = $unix;
        return $this;
    }

    public function getHuman(): string
    {
        return $this->human;
    }

    public function setHuman(string $human): TimestampDTO
    {
        $this->human = $human;
        return $this;
    }
}
