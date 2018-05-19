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
Route::get('/register_admin', 'LoginController@registerAdmin');
Route::post('/registerPostAdmin', 'LoginController@registerPostAdmin');
Route::get('/logoutAdmin', 'LoginController@logoutAdmin');

// USER
Route::get('/login-user-fp', 'LoginController@loginUser');
Route::get('login-user', function () {
    return view('login_user');
});
Route::post('/loginPostUser', 'LoginController@loginPostUser');
Route::get('loginPostUserFp/{id}', 'LoginController@loginPostUserFp');
Route::resource('user_manage','UserController');
Route::get('user_add','UserController@userAdd');
Route::get('user_data_putra','UserController@dataPutra');
Route::get('user_data_putri','UserController@dataPutri');
Route::get('/home_user', 'TransaksiController@indexTransaksiHistoryUser');
Route::get('/logoutUser', 'LoginController@logoutUser');
Route::get('user-add-fingerprint/{id}', 'UserController@addFingerPrint');


// TRANSACTION DATA (ADMIN)
Route::get('transaction_data_putra','TransaksiController@indexTransaksiPutra');
Route::get('transaction_report_putra','TransaksiController@indexTransaksiReportPutra');
Route::get('transaction_data_putri','TransaksiController@indexTransaksiPutri');
Route::get('transaction_report_putri','TransaksiController@indexTransaksiReportPutri');
Route::get('transaction_history_admin/{nim}','TransaksiController@userGetHistoryTransaction');
Route::get('transaction-save-via-admin/{nim}','TransaksiController@takingViaAdmin');
Route::get('transaction-data-all','TransaksiController@indexTransaksiAll');
Route::get('transaction-report-all','TransaksiController@indexTransaksiReportAll');

// TRANSACTION USER
Route::get('transaction_save','TransaksiController@createSaving');
Route::get('transaction_take','TransaksiController@createTaking');
Route::resource('transaction_index','TransaksiController');
Route::get('transaction_history_user','TransaksiController@indexTransaksiHistoryUser');