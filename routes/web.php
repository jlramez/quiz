<?php

use Illuminate\Support\Facades\Route;
use App\Exports\RespuestasExport;
use Maatwebsite\Excel\Facades\Excel;


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

Route::redirect('/', 'login');
/*Route::get('/', function () {
    return view('/login');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('preguntas',App\Http\Controllers\PreguntaController::class);
Route::resource('cuestionarios',App\Http\Controllers\CuestionarioController::class);
Route::resource('opciones',App\Http\Controllers\OpcioneController::class);
Route::resource('secciones',App\Http\Controllers\SeccioneController::class);
Route::resource('respuestas',App\Http\Controllers\RespuestaController::class);
Route::resource('tipos',App\Http\Controllers\TipoController::class);
Route::resource('evaluaciones/{id_pregunta}/',App\Http\Controllers\EvaluacionController::class);
Route::post('/evaluaciones/save/{id_pregunta}', [App\Http\Controllers\EvaluacionController::class, 'store'])
->name('evaluaciones.store');
Route::post('evaluaciones/{id_pregunta}', [App\Http\Controllers\EvaluacionController::class, 'index'])
->name('evaluaciones.index');
Route::get('reporte', [App\Http\Controllers\HomeController::class, 'index'])->name('reporte');
Route::get('reporte', function ()
{
    return Excel::download(new RespuestasExport,'respuestas.xlsx');
});
