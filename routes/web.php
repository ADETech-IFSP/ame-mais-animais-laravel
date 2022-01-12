<?php

use App\Http\Controllers\AuthController;
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


Route::get('/home', function () {
    $user = auth()->user();
    $photo = str_replace("public", "/storage", $user->profile_picture);
    return "
        <img src='{$photo}' />
    ";
})->name('home');

Route::get('/', [AuthController::class, 'index'])->name('auth.login');
Route::post('/', [AuthController::class, 'login'])->name('auth.login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register.post');
