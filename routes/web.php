<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResponsesController;
use App\Http\Controllers\ThreadsController;

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
    return view('home');
});

Route::get('/threads', [ThreadsController::class, 'index']);
Route::get('/threads/{id}/responses', [ResponsesController::class, 'index'])->name('responses.index');
Route::get('/threads/create', [ThreadsController::class, 'showCreateForm'])->name('thread.create');
Route::post('/threads/create', [ThreadsController::class, 'create']);
