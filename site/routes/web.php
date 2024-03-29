<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use App\Mail\ContactMail;
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
Route::get('/', 'App\Http\Controllers\ItemController@indexhome')->name('indexhome');


/// ------- PAGE ------- ///
// ABOUT
Route::get('/a-propos', function()
{
    return View::make('pages.about');
});

// CONTACT
Route::get('/contact', function()
{
    return View::make('pages.contact');
});
Route::resource('/contact', 'App\Http\Controllers\ContactFormController')->except([
    'index'
]);


// ATELIERS
Route::resource('ateliers', 'App\Http\Controllers\WorkshopController');
Route::resource('inscription', 'App\Http\Controllers\Workshop_userController');



// MOBILIER
Route::get('/mobilier-accueil', function()
{
    return View::make('pages.mobilieraccueil');
});
Route::resource('mobilier', 'App\Http\Controllers\ItemController');
Route::get('/mobilier-personnalisable', 'App\Http\Controllers\ItemController@indexdeux')->name('indexdeux');
//Route::get('/mobilier-personnalisable/{item}', 'App\Http\Controllers\ItemController@showdeux')->name('showdeux');
//Route::resource('/mobilier/article', 'App\Http\Controllers\ItemController');
Route::resource('article', 'App\Http\Controllers\ItemController@showarticle')->except([
    'show'
]);
Route::get('/article/{id}', 'App\Http\Controllers\ItemController@showarticle')->name('showarticle');

Route::resource('reservation', 'App\Http\Controllers\BookingController');
Route::resource('categorie', 'App\Http\Controllers\CategoryController');



// PROFIL
Route::resource('utilisateurs', 'App\Http\Controllers\UserController');

Route::resource('profil', 'App\Http\Controllers\UserController')->except([
    'indexprofil', 'showprofil', 'editprofil', 'updateprofil'
]);
Route::get('/profil', 'App\Http\Controllers\UserController@indexprofil')->name('indexprofil');
Route::get('/profil', 'App\Http\Controllers\UserController@showprofil')->name('showprofil');
Route::get('/profil.edit', 'App\Http\Controllers\UserController@editprofil')->name('editprofil');
Route::put('/profil', 'App\Http\Controllers\UserController@updateprofil')->name('updateprofil');


/// ------- LEGAL PAGE ------- ///
Route::get('/politique-de-confidentialite', function()
{
    return View::make('pages.gdpr');
});

Route::get('/conditions-generales', function()
{
    return View::make('pages.terms');
});