<?php


namespace App\Infrastructure\ExternalData\Requests;


class WalletsRequest extends OperationRequest
{
    private const ACTION_URI = 'wallets';

    public function __construct()
    {
        parent::__construct(self::ACTION_URI);
    }
}
