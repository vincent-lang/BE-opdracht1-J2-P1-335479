<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructeurController;
use App\Http\Controllers\VoertuigController;

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

// Route::get('/', function () {
//     return view('instructeur.index');
// });

Route::get('/', [InstructeurController::class, 'index'])->name('instructeur.index');

Route::get('/voertuig', [VoertuigController::class, 'index'])->name('voertuig.index');
