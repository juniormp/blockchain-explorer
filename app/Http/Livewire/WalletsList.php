<?php

namespace App\Http\Livewire;

use App\Http\Controllers\WalletsController;
use Livewire\Component;

class WalletsList extends Component
{
    public $wallets;

    public function mount(WalletsController $controller)
    {
        $this->wallets = json_decode($controller->listWallets(), true);
    }

    public function render()
    {
        return view('livewire.wallets-list');
    }
}
