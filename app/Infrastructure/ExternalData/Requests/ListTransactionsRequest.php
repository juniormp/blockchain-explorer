<?php


namespace App\Infrastructure\ExternalData\Requests;


class ListTransactionsRequest
{
    const ACTION_URI = 'transactions';

    public static function getHttpAction(): string {
        return self::ACTION_URI;
    }
}
