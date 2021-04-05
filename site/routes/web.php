<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AtelierController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\FavorisController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


/// ------- REDIRECT PAGE ------- ///
Route::get('/', function () {
    return view('welcome');
});

Route::get('/apropos', function()
{
return View::make('pages.apropos');
});

Route::get('/contact', function()
{
return View::make('pages.contact');
});

Route::resource('ateliers', AtelierController::class);

Route::resource('mobilier', ArticleController::class);

Route::resource('profil', UtilisateurController::class);

Route::resource('favoris', FavorisController::class);

Route::resource('panier', ReservationController::class);