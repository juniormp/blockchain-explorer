<?php


namespace App\Infrastructure\ExternalData\Requests;


class DelegatesRequest extends OperationRequest
{
    private const ACTION_URI = 'delegates';

    public function __construct()
    {
        parent::__construct(self::ACTION_URI);
    }
}
