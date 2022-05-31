<?php

use App\Http\Controllers\AddController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookcontroller;
use Illuminate\Routing\RouteGroup;

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

Route::GET('/', function () {
    return view('main');
});
Route::GET('/main', function () {
    return view('main');
});
Route::GET('/doc', function () {
    return view('doc');
});
Route::post('/indx', function () {
    return view('main');
});


route::post('/main',[AddController::class,'Add']);
