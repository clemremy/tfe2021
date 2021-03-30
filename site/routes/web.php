<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// REDIRECT PAGE
// Page d'acccueil
Route::get('/', function () {
    return view('welcome');
});
// Page a propos
Route::get('/apropos', function()
{
return View::make('pages.apropos');
});
// Page contact
Route::get('/contact', function()
{
return View::make('pages.contact');
});