<?php


namespace App\Infrastructure\ExternalData\Requests;


abstract class OperationRequest
{
    /** @var bool  */
    public $mainnet = true;

    /** @var string  */
    protected $action_uri;

    public function __construct(string $action_uri)
    {
        $this->action_uri = $action_uri;
    }

    public function getHttpAction(): string {
        return $this->action_uri;
    }

    public function changeToDevnet(){
        $this->mainnet = false;
    }

    public function isMainnet(): bool {
        return $this->mainnet;
    }
}
