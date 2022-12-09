<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

route::get('blogpage', [App\Http\Controllers\BlogController::class, 'index'])->name('blogpage');
route::post('/post/store', [App\Http\Controllers\BlogController::class, 'store'])->name('poststore');
route::get('managepost', [App\Http\Controllers\BlogController::class, 'manage'])->name('managepost');
route::get('editpost/{id}', [App\Http\Controllers\BlogController::class, 'editpost'])->name('editpost');
route::put('update-post/{id}', [App\Http\Controllers\BlogController::class, 'updatepost']);
Route::get('delete-post/{id}', [App\Http\Controllers\BlogController::class, 'deletepost']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


