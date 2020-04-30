<?php


namespace App\Infrastructure\ExternalData\Requests;


class DelegatesRequestCommand extends OperationRequest
{
    protected $action_uri;

    public function __construct()
    {
        $this->action_uri = config('services.ark')['uri_delegate'];
        parent::__construct($this->action_uri);
    }
}
