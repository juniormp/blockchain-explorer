<?php

namespace App\Http\Livewire;

use App\Http\Controllers\TransactionsController;
use Livewire\Component;

class TransactionsList extends Component
{
    public $transactions;

    public function mount(TransactionsController $controller)
    {
        $this->transactions = json_decode($controller->listTransactions(), true);
    }

    public function render()
    {
        return view('livewire.transactions-list');
    }

    public function click()
    {
        dd(200);
    }
}
