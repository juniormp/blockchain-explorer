<?php


namespace App\Domain\Explorer\Models;


use Illuminate\Database\Eloquent\Model;

class PayloadDTO extends Model
{
    /** @var string */
    private $hash;

    /** @var integer */
    private $length;


    public function getHash(): string
    {
        return $this->hash;
    }

    public function setHash(string $hash): PayloadDTO
    {
        $this->hash = $hash;
        return $this;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function setLength(int $length): PayloadDTO
    {
        $this->length = $length;
        return $this;
    }
}
