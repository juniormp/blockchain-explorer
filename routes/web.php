<?php

Route::get('/', function () {
    return view('livewire/transactions-list-template');
});

Route::get('/transactions/{address}', 'TransactionsController@transactionDetails');
