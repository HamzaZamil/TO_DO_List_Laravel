<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use resources\views\tasks;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TasksController::class,'index']);

Route::get('/tasks', [TasksController::class,'index']);

Route::get('/tasks/create', [TasksController::class,'create']);

Route::post('/tasks', [TasksController::class,'store']);

Route::patch('/tasks/{id}', [TasksController::class,'update']);

Route::delete('/tasks/{id}', [TasksController::class,'delete']);