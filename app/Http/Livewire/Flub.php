<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Flub extends Component
{
    protected $listeners = ['clickedEvent' => 'clickedListener'];

    public function clickedListener()
    {
        dd('clickedListener');
    }
}
