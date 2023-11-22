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

Route::get('/fotos/editar/{id}', [\App\Http\Controllers\PhotosController::class, 'editForm'])
    ->middleware(['auth']);

Route::post('/fotos/editar/{id}', [\App\Http\Controllers\PhotosController::class, 'editProcess'])
    ->middleware(['auth']);

Route::get('/fotos/eliminar/{id}', [\App\Http\Controllers\PhotosController::class, 'deleteForm'])
    ->middleware(['auth']);

Route::post('/fotos/eliminar/{id}', [\App\Http\Controllers\PhotosController::class, 'deleteProcess'])
    ->middleware(['auth']);

Route::get('/noticias', [\App\Http\Controllers\NewsController::class, 'news']);

Route::get('/noticias/{id}', [\App\Http\Controllers\NewsController::class, 'view'])
    ->whereNumber('id');

Route::get('/noticias/subir', [\App\Http\Controllers\NewsController::class, 'uploadForm'])
    ->middleware(['auth']);

Route::post('/noticias/subir', [\App\Http\Controllers\NewsController::class, 'uploadProcess'])
    ->middleware(['auth']);

Route::get('/suscripcion', [\App\Http\Controllers\SubscriptionsController::class, 'subscription']);

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'admin'])
    ->middleware(['auth', 'admin']);

Route::get('/admin/ususarios', [\App\Http\Controllers\AdminController::class, 'news'])
    ->middleware(['auth', 'admin']);

Route::get('/admin/noticias', [\App\Http\Controllers\AdminController::class, 'news'])
    ->middleware(['auth', 'admin']);

Route::get('/admin/noticias/editar/{id}', [\App\Http\Controllers\NewsController::class, 'editForm'])
    ->middleware(['auth', 'admin']);

Route::post('/admin/noticias/editar/{id}', [\App\Http\Controllers\NewsController::class, 'editProcess'])
    ->middleware(['auth', 'admin']);

Route::get('/admin/noticias/eliminar/{id}', [\App\Http\Controllers\NewsController::class, 'deleteForm'])
    ->middleware(['auth', 'admin']);

Route::post('/admin/noticias/eliminar/{id}', [\App\Http\Controllers\NewsController::class, 'deleteProcess'])
    ->middleware(['auth', 'admin']);

Route::post('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'loginProcess'])
    ->name('auth.login.process');

Route::post('/registrar-sesion', [\App\Http\Controllers\AuthController::class, 'signupProcess']);

Route::post('/cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logoutProcess'])
    ->name('auth.logout.process');
