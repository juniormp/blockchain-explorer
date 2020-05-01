<?php

namespace App\Http\Livewire;

use App\Http\Controllers\DelegatesController;
use Livewire\Component;

class DelegatesList extends Component
{
    public $delegates;

    public function mount(DelegatesController $controller)
    {
        $this->delegates = json_decode($controller->listDelegates(), true);
    }

    public function render()
    {
        return view('livewire.delegates-list');
    }
}
