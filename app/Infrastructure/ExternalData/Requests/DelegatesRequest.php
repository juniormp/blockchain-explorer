<?php


namespace App\Infrastructure\ExternalData\Requests;


class DelegatesRequest implements IOperationRequest
{
    private $action_uri = 'delegates';

    public function getHttpAction(): string {
        return $this->action_uri;
    }
}
