<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;

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




Route::get('/', [RegisterController::class, 'listar']);


//Esta ruta me manda la vista de
// Route::put('/update/{id}', [RegisterController::class, 'actualizar'])->name('update');


Route::get('/update/{id}', [RegisterController::class, 'actualizar'])->name('actualizar');
Route::put('/update/{id}', [RegisterController::class, 'update'])->name('update');



Route::delete('/{id}', [RegisterController::class, 'destroy'])->name('destroy');




Route::get('/crear-cuenta', [RegisterController::class, 'index'])->name('register');
Route::post('/crear-cuenta', [RegisterController::class, 'store']);
Route::put('/{id}', [RegisterController::class, 'update']);


Route::get('/muro', [PostController::class, 'index'])->name('post.index');



