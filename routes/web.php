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

Route::get('/delegates', function () {
    return view('livewire/delegates-list-template');
});

Route::get('/wallets', function () {
    return view('livewire/wallets-list-template');
});

Route::get('/transactions/{address}', 'TransactionsController@transactionDetails');

Route::get('/blocks/{address}', 'BlocksController@blockDetails');

