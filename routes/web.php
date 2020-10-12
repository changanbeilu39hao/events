<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\EventsOnefourfiveController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('test', [TestController::class, 'index']);

Route::get('SiChuan145', [EventsOnefourfiveController::class, 'show']);
Route::post('SiChuan145', [EventsOnefourfiveController::class, 'store']);

Route::redirect('/', '/SiChuan145');
