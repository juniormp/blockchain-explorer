<?php


namespace App\Infrastructure\ExternalData\Requests;


interface IOperationRequest
{
    public function getHttpAction();
}
