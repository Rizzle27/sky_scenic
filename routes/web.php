<?php

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

// Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
// ->name('index');

Route::get('/', [\App\Http\Controllers\PhotosController::class, 'gallery'])
    ->name('index');

Route::get('/fotos/{id}', [\App\Http\Controllers\PhotosController::class, 'view'])
    ->whereNumber('id');

Route::get('/fotos/subir', [\App\Http\Controllers\PhotosController::class, 'uploadForm'])
    ->middleware(['auth']);

Route::post('/fotos/subir', [\App\Http\Controllers\PhotosController::class, 'uploadProcess'])
    ->middleware(['auth']);

Route::get('/noticias', [\App\Http\Controllers\NewsController::class, 'news']);

Route::get('/noticias/subir', [\App\Http\Controllers\NewsController::class, 'uploadForm'])
    ->middleware(['auth']);

Route::post('/noticias/subir', [\App\Http\Controllers\NewsController::class, 'uploadProcess'])
    ->middleware(['auth']);

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'admin'])
    ->middleware(['auth', 'admin']);

Route::post('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'loginProcess'])
    ->name('auth.login.process');

Route::post('/cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logoutProcess'])
    ->name('auth.logout.process');
