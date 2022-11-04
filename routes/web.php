<?php

use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\ChartJSController;

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

Route::get('chart', [ChartJSController::class, 'a1']);

//Route::get('/chart', function () {
   // return view('chartjs');
//});