<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;

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
    return view('home');
})->middleware('auth');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticating'])->name('Login');
Route::get('registeruser', [AuthController::class, 'registerUser'])->name('RegisterUser');
Route::get('registeradmin', [AuthController::class, 'registerAdmin'])->name('RegisterAdmin');
Route::post('registerClient', [AuthController::class, 'registerProcessClient'])->name('DaftarClient');
Route::post('registerAdmin', [AuthController::class, 'registerProcessAdmin'])->name('DaftarAdmin');
Route::get('logout', [AuthController::class, 'logout']);

Route::get('dashboard', [DashboardController::class, 'index'])->name('Dashboard');
Route::get('home', [HomeController::class, 'home'])->name('Home')->middleware('auth');
Route::get('books', [BookController::class, 'index']);


