<?php

use App\Http\Controllers\Examn2Controller;
use App\Http\Controllers\Examn3Controller;
use App\Http\Controllers\ExamnController;
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

Route::get('/', [ExamnController::class, 'all']) -> name (''); 
Route::get('/above', [Examn2Controller::class, 'above80']) -> name ('above'); 
Route::get('/equals', [Examn3Controller::class, 'equals80']) -> name ('equeals'); 

