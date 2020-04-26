<?php


namespace App\Infrastructure\ExternalData\Requests;


class ListTransactionsRequest implements IOperationRequest
{
    const ACTION_URI = 'transactions';

    public static function getHttpAction(): string {
        return self::ACTION_URI;
    }
}
