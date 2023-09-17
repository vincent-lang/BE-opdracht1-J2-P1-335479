<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructeurController;

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

Route::get('/instructeur/{instructeur}/list', [InstructeurController::class, 'list'])->name('instructeur.list');

Route::get('/instructeur/{instructeur}/addPage', [InstructeurController::class, 'addPage'])->name('instructeur.addPage');

Route::get('/instructeur/{instructeur}/{row}/add', [InstructeurController::class, 'add'])->name('instructeur.add');
