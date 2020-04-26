<?php


namespace App\Infrastructure\ExternalData\Requests;


class ListBlocksRequest
{
    const ACTION_URI = 'blocks';

    public static function getHttpAction(): string {
        return self::ACTION_URI;
    }
}
