<?php


namespace App\Infrastructure\ExternalData\Requests;


class ListBlocksRequest extends OperationRequest
{
    private const ACTION_URI = 'blocks';

    public function __construct()
    {
        parent::__construct(self::ACTION_URI);
    }

    public function withId(string $id) {
        $this->action_uri = $this->action_uri . '/' . $id;
    }
}
