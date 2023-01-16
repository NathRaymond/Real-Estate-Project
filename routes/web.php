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



Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', [App\Http\Controllers\HomeController::class, 'adminDashboard'])->name('admin_dashboard');
        Route::group(['prefix' => 'agents'], function () {
            Route::get('/', [App\Http\Controllers\Admin\AgentController::class, 'index'])->name('all_agents');
            Route::get('/edit', [App\Http\Controllers\Admin\AgentController::class, 'index'])->name('all_agents');
        });
    });
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});
