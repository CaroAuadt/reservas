<?php

use App\Http\Controllers\SocioController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('socio/agregar', [SocioController::class, 'create'])->name('socio.create');
Route::post('socio/guardar', [SocioController::class, 'store'])->name('socio.store');
Route::get('socio/listar', [SocioController::class, 'index'])->name('socio.index');
Route::get('socio/{socio}/editar', [SocioController::class, 'edit'])->name('socio.edit');
Route::get('socio/{socio}/ver', [SocioController::class, 'show'])->name('socio.show');
Route::put('socio/{socio}/actualizar', [SocioController::class, 'update'])->name('socio.update');
Route::delete('socio/{socio}/eliminar', [SocioController::class, 'destroy'])->name('socio.destroy');
