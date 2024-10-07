<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

/*
# Funcion que muestra la vista
Route::get('/', function () { 
    return view('task.index'); // estamos especificando la carpeta y luego la vista
});
*/

# Accede a al controller, accediendo al metodo index
Route::get('/', [TaskController::class,'index']); 

# Funcion que recepciona los datos del metodo post
Route::post('/', [TaskController::class,'store']);


Route::delete('/{id}', [TaskController::class,'destroy']) ->name('task.destroy');

