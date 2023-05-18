<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\OwnerController;
use App\Models\Car;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CarController::class, 'index'])->name('home');

Route::resource('car', CarController ::class)->except(['index']);

Route::resource('owner',OwnerController::class);

