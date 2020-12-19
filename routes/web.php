<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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
    return view('restClient');
})->name('login');
Route::get('admin',[ClientController::class,'index'])->name('user');
Route::get('classDetail/{classID}',[ClientController::class,'classWithID']);

Route::post('login',[ClientController::class,'login']);
Route::post('logout',[ClientController::class,'logout']);
Route::get('coba2',[ClientController::class,'class']);