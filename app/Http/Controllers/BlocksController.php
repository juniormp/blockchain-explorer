<?php


namespace App\Http\Controllers;


use App\Domain\Explorer\Services\RetrieveBlocksService;
use App\Infrastructure\ExternalData\Requests\BlockRequestCommand;

class BlocksController extends Controller
{
    private $retrieveBlocksService;

    public function __construct(RetrieveBlocksService $retrieveBlocksService)
    {
        $this->retrieveBlocksService = $retrieveBlocksService;
    }

    public function listBlocks(): string {
        $request = new BlockRequestCommand();
        $response = $this->retrieveBlocksService->execute($request);

        return json_encode($response, true);
    }

    public function blockDetails(string $id): string {
        $request = new BlockRequestCommand();
        $request->byId($id);
        $response = $this->retrieveBlocksService->execute($request);
        $block = json_encode($response, true);


        return view('livewire.block-details', compact('block'));
    }
}
