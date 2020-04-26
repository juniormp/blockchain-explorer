<?php


namespace App\Infrastructure\ExternalData\Requests;


class ListBlocksRequest implements IOperationRequest
{
    const ACTION_URI = 'blocks';

    public static function getHttpAction(): string {
        return self::ACTION_URI;
    }
}
