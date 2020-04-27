<?php


namespace App\Infrastructure\ExternalData\Requests;


class ListTransactionsRequest extends OperationRequest
{
    private const ACTION_URI = 'transactions';

    public function __construct()
    {
        parent::__construct(self::ACTION_URI);
    }

    public function withId(string $id) {
        $this->action_uri = $this->action_uri . '/' . $id;
    }

    public function withWalletAddress(string $address) {
        $this->action_uri = 'wallets' . '/' . $address . '/transactions';
    }
}
