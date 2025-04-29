<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', [IndexController::class, 'indexNews'])->name('inicio');

Route::get('welcome', [IndexController::class, 'indexNews']);

Route::get('sobre-nosotros', function () {
    return view('acerca');
});

Route::get('productos', [IndexController::class, 'producto'])->name('productos.index');
Route::get('productos/{id}', [IndexController::class, 'show'])->name('productos.show');

Route::get('proyectos', [IndexController::class, 'proyecto'])->name('sections.projects-list');

Route::get('testimonios', [IndexController::class, 'testimonio'])->name('sections.testimonials');

Route::get('BlogSolaris', [IndexController::class, 'blog'])->name('sections.blogs');

Route::get('noticias', [IndexController::class, 'blog'])->name('noticias');

Route::get('promociones', [IndexController::class, 'promocion'])->name('promociones');

Route::get('contacto', function () {
    return view('contacto');
});

Route::get('galeria', [IndexController::class, 'galeria'])->name('galeria');

Route::get('/galeria/{id}', [IndexController::class, 'show'])
    ->where('id', '[0-9]+')
    ->name('titulo.show');

Route::view('/envio', 'welcome');
Route::post('/envio', [ContactController::class, 'contactForm'])->name('envio');

Route::view('/envioDistribuidor', 'welcome');
Route::post('/envioDistribuidor', [ContactController::class, 'distriForm'])->name('envioDistribuidor');

Route::view('/envioEmpleo', 'welcome');
Route::post('/envioEmpleo', [ContactController::class, 'workUsForm'])->name('envioEmpleo');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');