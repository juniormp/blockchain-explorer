<?php


namespace App\Infrastructure\ExternalData\Requests;


class ListBlocksRequest implements IOperationRequest
{
    private $action_uri = 'blocks';

    public function getHttpAction(): string {
        return $this->action_uri;
    }

    public function withId(string $id) {
        $this->action_uri = $this->action_uri . '/' . $id;
    }
}
