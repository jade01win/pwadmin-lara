<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('main');
})->name('main-page');
Route::get('/login', function () {
    return view('login');
})->name('login-page');
Route::get('/register', function () {
    return view('register');
})->name('register-page');
Route::get('/manager', function () {
    return view('dashboard/manager');
})->name('manager-page');

Route::post('/login', [AuthController::class, 'authLogin'])->name('login');
Route::post('/register', [AuthController::class, 'authRegist'])->name('register');
