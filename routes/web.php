<?php

Route::get('/', function () {
    return view('livewire/transactions-list-template');
});

Route::get('/transactions', function () {
    return view('livewire/transactions-list-template');
});

Route::get('/blocks', function () {
    return view('livewire/blocks-list-template');
});

Route::get('/transactions/{address}', 'TransactionsController@transactionDetails');
