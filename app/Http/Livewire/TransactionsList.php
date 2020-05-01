<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TransactionsList extends Component
{
    public function render()
    {
        return view('livewire.transactions-list');
    }
    public function click()
    {
        dd(200);
        $this->emit('clickedEvent');
    }
}
