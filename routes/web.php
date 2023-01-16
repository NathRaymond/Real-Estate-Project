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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sign_up', function () {
    return view('sign_up');
})->name('sign-up');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'aboutindex'])->name('about');
Route::get('/property', [App\Http\Controllers\PropertyController::class, 'propertyindex'])->name('property');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contactindex'])->name('contact');
Route::get('/property-details', [App\Http\Controllers\PropertyController::class, 'property_details'])->name('property-details');
Route::get('/property-submit', [App\Http\Controllers\PropertyController::class, 'property_submit'])->name('property-submit');
Route::get('/team', [App\Http\Controllers\TeamController::class, 'teamindex'])->name('team');
Route::get('/agent-details', [App\Http\Controllers\TeamController::class, 'agent_details'])->name('agent-details');
