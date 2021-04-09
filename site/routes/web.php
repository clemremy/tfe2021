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



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/user', 'UserController@index')->name('user')->middleware('user');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');

Route::get('/register', 'App\Http\Controllers\Auth\RegisteredUserController@create')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisteredUserController@store')->name('registered');

/// ------- USER REDIRECT PAGE ------- ///
Route::get('/a-propos', function()
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

Route::get('/politique-de-confidentialite', function()
{
    return View::make('pages.politique');
});

Route::get('/conditions-generales-de-vente', function()
{
    return View::make('pages.cgv');
});



/// ------- ADMIN REDIRECT PAGE ------- ///