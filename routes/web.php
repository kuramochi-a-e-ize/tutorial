<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\OjisanController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/folders/{id}/tasks', [TaskController::class, 'index'])->name('tasks.index');
//Route::get('/folders/{id}/tasks/plus', [TaskController::class, 'plus'], ['name' => 'tasks.plus']);

Route::get('/folders/{id}/oji', [OjisanController::class, 'index'])->name('ojisans.index');
Route::get('/folders/{id}/oji/plus', [OjisanController::class, 'plus'])->name('ojisans.plus');
