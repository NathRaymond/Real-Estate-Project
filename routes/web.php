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
Route::get('/register-agent', function () {
    return view('agent.register');
})->name('register_agent');
Route::POST('/register-agent', [App\Http\Controllers\AgentController::class, 'registerAgent'])->name('register_agent');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
 Route::get('/get_lga', [App\Http\Controllers\AgentController::class, 'getLGA'])->name("get_state_lga");

Route::group(['prefix' => 'agent'], function () {
    Route::get('/', [App\Http\Controllers\AgentController::class, 'dashboard'])->name('agent_dashboard');
    Route::get('/profile', [App\Http\Controllers\AgentController::class, 'profile'])->name('agent_profile');
    Route::POST('/profile', [App\Http\Controllers\AgentController::class, 'update_profile'])->name('update_agent_profile');
    Route::get('/property', [App\Http\Controllers\AgentController::class, 'agentProperties'])->name('agent_properties');
    Route::get('/add_property', [App\Http\Controllers\AgentController::class, 'add_property'])->name('add_property');
   });

});
   Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name("logout");

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
