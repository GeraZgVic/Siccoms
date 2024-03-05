<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiciosController;

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

Route::get('/',[HomeController::class, 'index'])->name('home'); //LISTO

// Usuarios autenticados (Administrador)
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'destroy'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Usuarios (Visitantes)
Route::get('/servicios',[ServiciosController::class, 'index'])->name('servicios.index');

Route::get('/nosotros',[NosotrosController::class, 'index'])->name('nosotros.index'); //TRABAJANDO

Route::get('/blog',[BlogController::class, 'index'])->name('blog.index');

Route::get('/contacto',[ContactoController::class, 'index'])->name('contacto.index');

