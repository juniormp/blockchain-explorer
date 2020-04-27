<?php


namespace App\Infrastructure\ExternalData\Requests;


class WalletsRequest implements IOperationRequest
{
    private $action_uri = 'wallets';

    public function getHttpAction(): string {
        return $this->action_uri;
    }
}
