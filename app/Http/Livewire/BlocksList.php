<?php

namespace App\Http\Livewire;

use App\Http\Controllers\BlocksController;
use Livewire\Component;

class BlocksList extends Component
{
    public $blocks;

    public function mount(BlocksController $controller)
    {
        $this->blocks = json_decode($controller->listBlocks(), true);
    }

    public function render()
    {
        return view('livewire.blocks-list');
    }

    public function showDetails($address)
    {
        redirect()->action('BlocksController@blockDetails', ['address' => $address]);
    }
}
