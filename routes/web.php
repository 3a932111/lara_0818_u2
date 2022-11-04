<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HelloController;

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

/*練習 1-8  改用controller回傳*/
Route::get('home', [HomeController::class,'index'])
    ->name('home.index');

/*練習 3-3  設定route*/
Route::get('hello/{name?}',[HelloController::class,'hello.index']);
