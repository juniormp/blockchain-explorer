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

    public function byAddress(string $address) {
        $this->action_uri = $this->action_uri . '/' . $address;
    }

    public function transactionsFromAddress(string $address) {
        $this->action_uri = 'wallets' . '/' . $address . '/transactions';
    }
}
