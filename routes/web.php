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

Route::get('/exp-1', [ExperimentController::class, 'show_exp_1'])->name('show_exp_1');

Route::post('/experiment', [ExperimentController::class, 'store'])->name('submit_log');

Route::get('/exp-2', [ExperimentController::class, 'show_exp_2'])->name('show_exp_2');

Route::get('/exp-3', [ExperimentController::class, 'show_exp_3'])->name('show_exp_3');

//mockup

Route::get('/timer', [ExperimentController::class, 'timer'])->name('timer');

Route::get('/start', [ExperimentController::class, 'start'])->name('start');

Route::get('/menu', [ExperimentController::class, 'menu'])->name('menu');