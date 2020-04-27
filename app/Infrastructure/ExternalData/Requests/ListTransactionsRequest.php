<?php


namespace App\Infrastructure\ExternalData\Requests;


class ListTransactionsRequest implements IOperationRequest
{
    private $action_uri = 'transactions';

    public function getHttpAction(): string {
        return $this->action_uri;
    }

    public function withId(string $id) {
        $this->action_uri = $this->action_uri . '/' . $id;
    }

    public function withWalletAddress(string $address) {
        $this->action_uri = 'wallets' . '/' . $address . '/transactions';
    }
}
