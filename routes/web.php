<?php
use App\Http\Controllers\TestSmsController;
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


Route::get('/testsms', function () {
    return view('testsms');
});
Route::post('testsms','TestSmsController@sendSms');