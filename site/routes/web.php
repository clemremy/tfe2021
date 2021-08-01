<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavoriteController;

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

/*Auth::routes();
Route::get('/user', 'UserController@index')->name('user')->middleware('user');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
*/
//Route::get('/register', 'App\Http\Controllers\Auth\RegisteredUserController@create')->name('register');
//Route::post('/register', 'App\Http\Controllers\Auth\RegisteredUserController@store')->name('registered');


/// ------- USER REDIRECT PAGE ------- ///
// AbOUT
Route::get('/a-propos', function()
{
    return View::make('pages.about');
});

// CONTACT

Route::get('/contact', function()
{
    return View::make('pages.contact');
});

//Route::get('/contact', [ContactFormController::class, 'createForm']);
//Route::post('/contact', [ContactFormController::class, 'ContactUsForm'])->name('contact.store');
//Route::get('/contact', 'App\Http\Controllers\ContactFormController@createForm')->name('createform');
//Route::get('/contact', 'App\Http\Controllers\ContactFormController@ContactUsForm')->name('contact.store');

Route::resource('ateliers', 'App\Http\Controllers\WorkshopController');
//Route::put('/ateliers', 'App\Http\Controllers\WorkshopController@update')->name('update');

//Route::resource('mobilier', ItemController::class);
Route::resource('mobilier', 'App\Http\Controllers\ItemController');

Route::resource('profil', UserController::class);
Route::resource('favoris', FavoriteController::class);
Route::resource('panier', BookingController::class);



/// ------- LEGAL PAGE ------- ///
Route::get('/politique-de-confidentialites', function()
{
    return View::make('pages.gdpr');
});

Route::get('/conditions-generales-de-vente', function()
{
    return View::make('pages.terms');
});