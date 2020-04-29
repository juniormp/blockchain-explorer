
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

Route::get('list-transactions', 'TransactionsController@listTransactions');
Route::get('transaction-details/{id}', 'TransactionsController@transactionDetails');

Route::get('list-blocks', 'BlocksController@listBlocks');
Route::get('block-details/{id}', 'BlocksController@blockDetails');

Route::get('list-wallets', 'WalletsController@listWallets');
