<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('trans', function(){
    return view('transaction');
});
Route::get('transmc', function(){
    return view('transactionmulticredit');
});

Route::get('bank', 'SOAPController@showBanks');
Route::post('trasaction', 'SOAPController@createTransaction');
Route::post('trasactionMultiCredit', 'SOAPController@createTransaction');
Route::get('trasactionInformation/{transactionID}', 'SOAPController@getTransactionInformation');

