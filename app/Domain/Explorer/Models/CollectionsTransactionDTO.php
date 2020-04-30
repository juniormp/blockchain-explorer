<?php


namespace App\Domain\Explorer\Models;


use Illuminate\Support\Collection;

class CollectionsTransactionDTO
{
    /** @var Collection */
    public $transactions;

    public function setTransactions(Collection $transactions): CollectionsTransactionDTO
    {
        $this->transactions = $transactions;
        return $this;
    }
}
