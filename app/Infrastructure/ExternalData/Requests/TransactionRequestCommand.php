<?php


namespace App\Infrastructure\ExternalData\Requests;


class TransactionRequestCommand extends OperationRequest
{
    protected $action_uri;

    public function __construct()
    {
        $this->action_uri = config('services.ark')['uri_transaction'];
        parent::__construct($this->action_uri);
    }

    public function byId(string $id) {
        $this->action_uri = $this->action_uri . '/' . $id;
    }

    public function byWalletAddress(string $address) {
        $this->action_uri = 'wallets' . '/' . $address . '/transactions';
    }
}
