<?php

use App\Http\Controllers\ArrayDataController;
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

Route::get('/arraydata', [ArrayDataController::class, 'index']);
Route::get('/createdata', [ArrayDataController::class, 'create']);

Route::get('/', function () {
    return view('welcome');
});
