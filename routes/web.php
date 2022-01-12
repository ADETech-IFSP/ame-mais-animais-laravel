<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;

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


Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::post('/pet/create', [PetController::class, 'create'])->name('pet.create')->middleware('auth');
Route::get('/pet/{id}', [PetController::class, 'show'])->name('pet.show')->middleware('auth');
Route::get('/pet/{id}/edit', [PetController::class, 'edit'])->name('pet.edit')->middleware('auth');
Route::post('/pet/{id}/edit', [PetController::class, 'update'])->name('pet.update')->middleware('auth');
Route::get('/pet/{id}/delete', [PetController::class, 'delete'])->name('pet.delete')->middleware('auth');

Route::get('/', [AuthController::class, 'index'])->name('auth.login');
Route::post('/', [AuthController::class, 'login'])->name('auth.login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register.post');
