<?php

use Illuminate\Support\Facades\Route;
//以下追加
use App\Http\Controllers\IntroTestController;

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
Route::get('/building', [IntroTestController::class, 'index']);
Route::get('/building/{room?}', [IntroTestController::class, 'index2']);