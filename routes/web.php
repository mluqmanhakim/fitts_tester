<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExperimentController;


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

Route::get('/experiment', [ExperimentController::class, 'index'])->name('show_exp');
Route::post('/experiment', [ExperimentController::class, 'store'])->name('submit_log');