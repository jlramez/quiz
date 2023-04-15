<?php

use Illuminate\Support\Facades\Route;
use App\classes\Detalles;

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
//Auth::routes(['register' => false]);

/*Route::get('reporte/{id_centro}', function () {
    return view('welcome');
})->name('reporte_centro');*/


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('home');
Route::get('/homeuser', [App\Http\Controllers\HomeController::class, 'index_u'])
->name('home_user');

Auth::routes();
Route::group(['middleware' => ['auth']], function() {
Route::get('/evento', [App\Http\Controllers\EventoController::class, 'index'])
->name('evento.index');
Route::post('/evento/create', [App\Http\Controllers\EventoController::class, 'store'])
->name('evento.store');
Route::post('/evento/show/', [App\Http\Controllers\EventoController::class, 'show'])
->name('evento.show');
Route::post('/evento/edit/{id}', [App\Http\Controllers\EventoController::class, 'edit'])
->name('evento.edit');
Route::post('/evento/update/{evento}', [App\Http\Controllers\EventoController::class, 'update'])
->name('evento.update');
Route::post('/evento/delete/{id}', [App\Http\Controllers\EventoController::class, 'destroy'])
->name('evento.delete');
});
//Route Hooks - Do not delete//
	Route::view('permissions', 'livewire.permissions.index')->middleware('auth');
	Route::view('registros', 'livewire.registros.index')->middleware('auth');
	Route::view('users', 'livewire.users.index')->middleware('auth');
	Route::view('roles', 'livewire.roles.index')->middleware('auth');
    Route::view('estados', 'livewire.estados.index')->middleware('can:estados.index')->name('estados.index')->middleware('auth');
	Route::view('atareas', 'livewire.atareas.index')->middleware('can:atareas.index')->name('atareas.index')->middleware('auth');
	Route::view('tareas', 'livewire.tareas.index')->middleware('can:tareas.index')->name('tareas.index')->middleware('auth');
	Route::view('prioridades', 'livewire.prioridades.index')->middleware('can:prioridades.index')->name('prioridades.index')->middleware('auth');	
	Route::view('actividades', 'livewire.actividades.index')->middleware('can:actividades.index')->name('actividades.index')->middleware('auth');
	Route::view('detalles/{id_actividad}', 'livewire.actividades.indexdetalles')->name('detalles.index')->middleware('auth');
	Route::view('tasks/{id_actividad}', 'livewire.actividades.indextareas')->name('detalles_tareas.index')->middleware('auth');

	//Route::get('/detalles/{id}', detalles::class);
	Route::view('puestos', 'livewire.puestos.index')->middleware('can:puestos.index')->name('puestos.index')->middleware('auth');
	Route::view('areas', 'livewire.areas.index')->middleware('can:areas.index')->name('areas.index')->middleware('auth');
	Route::view('empleados', 'livewire.empleados.index')->middleware('can:empleados.index')->name('empleados.index')->middleware('auth');
	Route::view('permisos', 'livewire.permisos.index')->name('permisos.index')->middleware('auth');
	Route::view('showtareashechas', 'livewire.tareas.indextareashechas')->name('show_done.index')->middleware('auth');
	Route::view('tareaspendientes', 'livewire.tareas.indextareaspendientes')->name('tareaspendientes.index')->middleware('auth');
	Route::view('details/{id_tarea}', 'livewire.tareas.indexdetails')->name('tareas.show')->middleware('auth');
	Route::view('files/{id_tarea}', 'livewire.files.index')->name('files.index')->middleware('auth');
	Route::view('comentarios/{id_tarea}', 'livewire.comentarios.index')->name('comentarios.index')->middleware('auth');
	Route::view('comentarios/show/{id_tarea}', 'livewire.comentarios.show')->name('comentarios.show')->middleware('auth');
	Route::view('reportes/{id_centro}', 'livewire.reportes.index')->name('reportes.index')->middleware('auth');