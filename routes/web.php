<?php

use App\Http\Controllers\WorldDataController;
use Illuminate\Support\Facades\Route;

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

Route::get('/countries',[WorldDataController::class,'countries']);
Route::get('fetch-state',[WorldDataController::class,'state']);
Route::get('fetch-city',[WorldDataController::class,'city']);
