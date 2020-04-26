<?php


namespace App\Domain\Explorer\Models;


use Illuminate\Database\Eloquent\Model;

class GeneratorDTO extends Model
{
    /** @var string */
    private $username;

    /** @var string */
    private $address;

    /** @var string */
    private $publicKey;

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): GeneratorDTO
    {
        $this->username = $username;
        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): GeneratorDTO
    {
        $this->address = $address;
        return $this;
    }

    public function getPublicKey(): string
    {
        return $this->publicKey;
    }

    public function setPublicKey(string $publicKey): GeneratorDTO
    {
        $this->publicKey = $publicKey;
        return $this;
    }
}
