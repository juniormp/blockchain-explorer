<?php


namespace App\Http\Controllers;


use App\Domain\Explorer\Services\RetrieveBlocksService;
use App\Infrastructure\ExternalData\Requests\ListBlocksRequest;

class BlocksController extends Controller
{
    private $retrieveBlocksService;

    public function __construct(RetrieveBlocksService $retrieveBlocksService)
    {
        $this->retrieveBlocksService = $retrieveBlocksService;
    }

    public function listBlocks(): string {
        $request = new ListBlocksRequest();
        $response = $this->retrieveBlocksService->execute($request);

        return json_encode($response->getBlocks(), true);
    }

    public function blockDetails(string $id): string {
        $request = new ListBlocksRequest();
        $request->withId($id);
        $response = $this->retrieveBlocksService->execute($request);

        return json_encode($response, true);
    }
}
