<?php


namespace App\Http\Controllers;


use App\Domain\Explorer\Services\RetrieveWalletsService;
use App\Infrastructure\ExternalData\Requests\WalletsRequest;

class WalletsController extends Controller
{
    private $retrieveWalletsService;

    public function __construct(RetrieveWalletsService $retrieveWalletsService)
    {
        $this->retrieveWalletsService = $retrieveWalletsService;
    }

    public function listWallets(): string {
        $request = new WalletsRequest();
        $response = $this->retrieveWalletsService->execute($request);

        return json_encode($response->getWallets(), true);
    }
}
