<?php


namespace App\Infrastructure\ExternalData\Requests;


class WalletsRequestCommand extends OperationRequest
{
    protected $action_uri;

    public function __construct()
    {
        $this->action_uri = config('services.ark')['uri_wallet'];
        parent::__construct($this->action_uri);
    }

    public function byId(string $id) {
        $this->action_uri = $this->action_uri . '/' . $id;
    }
}
