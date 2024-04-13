<?php

use App\Http\Controllers\AlphabetsController;
use App\Http\Controllers\ARController;
use App\Http\Controllers\DomAnimalController;
use App\Http\Controllers\NumbersController;
use App\Http\Controllers\PoemsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizzesController;
use App\Http\Controllers\ShapesController;
use App\Http\Controllers\VegetablesController;
use App\Http\Controllers\WildAnimalController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('frontend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource("alphabets", AlphabetsController::class);
    Route::resource("numbers", NumbersController::class);
    Route::resource("shapes", ShapesController::class);
    Route::resource("poems", PoemsController::class);
    Route::resource("quizzes", QuizzesController::class);
    Route::resource('domestic-animal', DomAnimalController::class);
    Route::resource('wild-animal', WildAnimalController::class);
    Route::resource('vegetables', VegetablesController::class);
    Route::resource('AR', ARController::class);

    Route::get('/drawing-board', function () {
        return view('frontend.drawing');
    })->middleware(['auth'])->name('drawingBoard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
