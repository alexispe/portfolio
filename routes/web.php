<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
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
    return view('home');
})->name('home');

Route::get('/projets/{slug}', [ProjectController::class, 'show'])->name('project.show');

Route::get('/developpement-web', function () {
    return view('devweb');
})->name('devweb');

Route::get('/dev-ops', function () {
    return view('devops');
})->name('devops');

Route::get('/formateur', function () {
    return view('teacher');
})->name('teacher');

Route::get('/articles', [PostController::class, 'index'])->name('posts.index');
Route::get('/articles/{slug}', [PostController::class, 'show'])->name('posts.show');
