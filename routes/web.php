<?php
use App\Http\Controllers\PaginaController;
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

Route::get('/',function(){
    return view('paginas.index');
});

Route::get('/contacto/{codigo?}', [PaginaController::class, 'contacto']);
Route::post('/contacto', [PaginaController::class, 'guarda']);

Route::get('/alumno',[AlumnoController::class, 'index']);
Route::get('/alumno/create',[AlumnoController::class, 'create']);
Route::get('/alumno{id}',[AlumnoController::class, 'show']);


