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

// ADMIN
Route::get('/home_admin', 'LoginController@indexAdmin');
Route::get('/login_admin', 'LoginController@loginAdmin');
Route::post('/loginPostAdmin', 'LoginController@loginPostAdmin');
//Route::get('/register_admin', 'LoginController@registerAdmin');
Route::post('/registerPostAdmin', 'LoginController@registerPostAdmin');
Route::get('/logoutAdmin', 'LoginController@logoutAdmin');

// USER
Route::get('/login_user', 'LoginController@loginUser');
Route::post('/loginPostUser', 'LoginController@loginPostUser');
Route::resource('user_manage','UserController');
Route::get('user_add','UserController@userAdd');
Route::get('user_data_putra','UserController@dataPutra');
Route::get('user_data_putri','UserController@dataPutri');
Route::get('/home_user', 'LoginController@indexUser');
Route::get('/logoutUser', 'LoginController@logoutUser');


// TRANSACTION DATA (ADMIN)
Route::get('transaction_data_putra','TransaksiController@indexTransaksiPutra');
Route::get('transaction_report_putra','TransaksiController@indexTransaksiReportPutra');
Route::get('transaction_data_putri','TransaksiController@indexTransaksiPutri');
Route::get('transaction_report_putri','TransaksiController@indexTransaksiReportPutri');
Route::get('transaction_history_admin/{nim}','TransaksiController@userGetHistoryTransaction');

// TRANSACTION USER
Route::get('transaction_save','TransaksiController@createSaving');
Route::get('transaction_take','TransaksiController@createTaking');
Route::resource('transaction_index','TransaksiController');
Route::get('transaction_history_user','TransaksiController@indexTransaksiHistoryUser');

Route::get('/', function () {
    return view('welcome');
});