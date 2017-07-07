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

 Route::get('/', ['uses' =>'BankController@index','as' => 'index']);

 Route::get('/account', ['uses' =>'BankController@showAccount','as' => 'bank.account']);

  Route::get('/accounts', ['uses' =>'BankController@showBankAccounts','as' => 'bank.accounts']);

 Route::get('/finish',  ['uses' =>'BankController@showFinish','as' => 'bank.account.finish']);

 Route::put('/account/{user_id}', ['uses' =>'BankController@saveAccount','as' => 'bank.account.store']);

 Route::post('/basics', ['uses' =>'BankController@store','as' => 'bank.basics']);
