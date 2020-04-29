<?php


namespace App\Http\Controllers;


use App\Domain\Explorer\Services\RetrieveDelegatesService;
use App\Infrastructure\ExternalData\Requests\DelegatesRequest;

class DelegatesController extends Controller
{
    private $retrieveDelegatesService;

    public function __construct(RetrieveDelegatesService $retrieveDelegatesService)
    {
        $this->retrieveDelegatesService = $retrieveDelegatesService;
    }

    public function listDelegates(): string {
        $request = new DelegatesRequest();
        $response = $this->retrieveDelegatesService->execute($request);

        return json_encode($response->getDelegates(), true);
    }
}
