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
Route::get('/storage-link', function() {
    $targetFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder, $linkFolder);
});

Route::get('/',[HomeController::class, 'index'])->name('home'); //LISTO

// Usuarios autenticados (Administrador)
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'destroy'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Usuarios (Visitantes)
Route::get('/servicios',[ServiciosController::class, 'index'])->name('servicios.index');
// Rutas de servicios destacados
Route::get('/servicios/rastreo-gps',[ServiciosController::class, 'gps'])->name('servicios.gps');
Route::get('/servicios/instalacion-cctv',[ServiciosController::class, 'cctv'])->name('servicios.cctv');
Route::get('/servicios/desarrollo-de-sistemas',[ServiciosController::class, 'desarrollo'])->name('servicios.desarrollo');
Route::get('/servicios/alarmas-residenciales',[ServiciosController::class, 'alarmas'])->name('servicios.alarmas');
Route::get('/servicios/seguridad-vehicular',[ServiciosController::class, 'seguridadVehicular'])->name('servicios.seguridadVehicular');
Route::get('/servicios/seguridad-perimetral',[ServiciosController::class, 'seguridadPerimetral'])->name('servicios.seguridadPerimetral');

Route::get('/servicios/mantenimiento',[ServiciosController::class, 'mantenimiento'])->name('servicios.mantenimiento');
Route::get('/servicios/venta-de-computo',[ServiciosController::class, 'computo'])->name('servicios.computo');
Route::get('/servicios/amplificador-de-señal',[ServiciosController::class, 'amplificadorSeñal'])->name('servicios.amplificadorSeñal');
Route::get('/servicios/redes-inalambricas',[ServiciosController::class, 'redesInalambricas'])->name('servicios.redesInalambricas');
Route::get('/servicios/cableado-estructurado',[ServiciosController::class, 'cableadoEstructurado'])->name('servicios.cableadoEstructurado');
Route::get('/servicios/telefonia',[ServiciosController::class, 'telefonia'])->name('servicios.telefonia');



Route::get('/nosotros',[NosotrosController::class, 'index'])->name('nosotros.index'); 

Route::get('/blog',[BlogController::class, 'index'])->name('blog.index');
Route::get('/posts/{id}', [BlogController::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit',[BlogController::class, 'edit'])->name('posts.edit');
Route::delete('/posts/delete/{id}',[BlogController::class, 'destroy'])->name('posts.destroy');

Route::get('/contacto',[ContactoController::class, 'index'])->name('contacto.index');
Route::post('/contacto',[ContactoController::class, 'store'])->name('contacto.store');





