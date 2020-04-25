<?php

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return response('Health!', 200);
});
