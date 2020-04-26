<?php


namespace App\Infrastructure\ExternalData\Exceptions;


use Symfony\Component\HttpKernel\Exception\HttpException;

class ArkClientApiException extends HttpException
{
    public function __construct(string $message, int $statusCode)
    {
        parent::__construct($statusCode, $message);
    }
}
