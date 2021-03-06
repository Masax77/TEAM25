<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;

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

// // 休日設定表示
Route::get('/holiday', 'App\Http\Controllers\CalendarController@getHoliday');
Route::post('/holiday', 'App\Http\Controllers\CalendarController@postHoliday');
Route::get('/holiday/{id}', 'App\Http\Controllers\CalendarController@getHolidayId');
Route::delete('/holiday', 'App\Http\Controllers\CalendarController@deleteHoliday');

// カレンダー表示
 Route::get('/index', 'App\Http\Controllers\CalendarController@index');
    


// カレンダー組み込みログイン画面
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [CalendarController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
