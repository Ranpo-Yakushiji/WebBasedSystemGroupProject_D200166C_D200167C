<?php

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
    return view('welcome');
});

Route::get('/addCategory', function () {
    return view('addCategory');
});

Route::get('/addGame', function () {
    return view('addGame', ['CategoryID'=>App\Models\Category::all()]);
});

Route::post('/addCategory/game',[App\Http\Controllers\CategoryController::class,'add'])->name('addCategory');

Route::post('/addGame/game',[App\Http\Controllers\GameController::class,'add'])->name('addGame');

Route::get('/showCategory',[App\Http\Controllers\CategoryController::class,'view'])->name('showCategory');

Route::get('/showGame',[App\Http\Controllers\GameController::class,'view'])->name('showGame');

Route::get('/deleteCategory/{id}',[App\Http\Controllers\CategoryController::class,'delete'])->name('deleteCategory');

Route::get('/deleteGame/{id}',[App\Http\Controllers\GameController::class,'delete'])->name('deleteGame');

Route::get('editCategory/{id}',[App\Http\Controllers\CategoryController::class,'edit'])->name('editCategory');

Route::post('/updateCategory',[App\Http\Controllers\CategoryController::class,'update'])->name('updateCategory');

Route::get('editGame/{id}',[App\Http\Controllers\GameController::class,'edit'])->name('editGame');

Route::post('/updateGame',[App\Http\Controllers\GameController::class,'update'])->name('updateGame');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
