<?php

use App\Http\Controllers\ProyectoController;
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

Route::resource("projects", ProyectoController::class);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/projects/store', [App\Http\Controllers\ProyectoController::class, 'store'])->name('projects');
// Route::post('/projects', 'ProyectoController@store')->name('projects');