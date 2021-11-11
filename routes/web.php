<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\FolderController;
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

// Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');  /* v6 */
// Route::get('/folders/{id}/tasks/create', 'TaskController@showCreateForm')->name('tasks.create');  /* v6 */
// Route::post('/folders/{id}/tasks/create', 'TaskController@create');  /* v6 */
Route::get('/folders/{id}/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/folders/{id}/tasks/create', [TaskController::class, 'showCreateForm'])->name('tasks.create');
Route::post('/folders/{id}/tasks/create', [TaskController::class, 'create']);

// Route::get('/folders/create', 'FolderController@showCreateForm')->name('folders.create');  /* v6 */
// Route::post('/folders/create', 'FolderController@create');  /* v6 */
Route::get('/folders/create', [FolderController::class, 'showCreateForm'])->name('folders.create');
Route::post('/folders/create', [FolderController::class, 'create']);

Route::get('/folders/oji', [OjisanController::class, 'index']);
Route::get('/folders/oji/plus', [OjisanController::class, 'plus']);
