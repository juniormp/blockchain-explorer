<?php


namespace App\Http\Controllers;


use App\Domain\Explorer\Services\RetrieveWalletsService;
use App\Infrastructure\ExternalData\Requests\WalletsRequestCommand;

class WalletsController extends Controller
{
    private $retrieveWalletsService;

    public function __construct(RetrieveWalletsService $retrieveWalletsService)
    {
        $this->retrieveWalletsService = $retrieveWalletsService;
    }

    public function listWallets(): string {
        $request = new WalletsRequestCommand();
        $response = $this->retrieveWalletsService->execute($request);

        return json_encode($response, true);
    }

    public function votingFor($address): string {
        $request = new WalletsRequestCommand();
        $request->byAddress($address);
        $response = $this->retrieveWalletsService->execute($request);

        return json_encode($response->votingFor(), true);
    }
}
