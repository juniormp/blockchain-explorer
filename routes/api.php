
<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('transactions')->group(function () {
    Route::get('', 'TransactionsController@listTransactions');
    Route::get('{id}', 'TransactionsController@transactionDetails');
});

Route::prefix('blocks')->group(function () {
    Route::get('', 'BlocksController@listBlocks');
    Route::get('{id}', 'BlocksController@blockDetails');
});

Route::prefix('wallets')->group(function () {
    Route::get('', 'WalletsController@listWallets');
});

Route::prefix('delegates')->group(function () {
    Route::get('', 'DelegatesController@listDelegates');
});











