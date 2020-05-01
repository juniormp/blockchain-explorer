<?php

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('livewire/transactions-list-template');
});
