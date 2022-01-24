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

Route::get('/addDeveloper', function () {
    return view('addDeveloper');
});

Route::post('/addCategory/game',[App\Http\Controllers\CategoryController::class,'add'])->name('addCategory');

Route::post('/addGame/game',[App\Http\Controllers\GameController::class,'add'])->name('addGame');

Route::post('/addDeveloper/game',[App\Http\Controllers\DeveloperController::class,'add'])->name('addDeveloper');

Route::post('/addComment',[App\Http\Controllers\CommentController::class,'add'])->name('addComment');

Route::get('/showCategory',[App\Http\Controllers\CategoryController::class,'view'])->name('showCategory');

Route::get('/showGame',[App\Http\Controllers\GameController::class,'view'])->name('showGame');

Route::get('/showDeveloper',[App\Http\Controllers\DeveloperController::class,'view'])->name('showDeveloper');

Route::get('/deleteCategory/{id}',[App\Http\Controllers\CategoryController::class,'delete'])->name('deleteCategory');

Route::get('/deleteGame/{id}',[App\Http\Controllers\GameController::class,'delete'])->name('deleteGame');

Route::get('/deleteDeveloper/{id}',[App\Http\Controllers\DeveloperController::class,'delete'])->name('deleteDeveloper');

Route::get('editCategory/{id}',[App\Http\Controllers\CategoryController::class,'edit'])->name('editCategory');

Route::post('/updateCategory',[App\Http\Controllers\CategoryController::class,'update'])->name('updateCategory');

Route::get('editGame/{id}',[App\Http\Controllers\GameController::class,'edit'])->name('editGame');

Route::post('/updateGame',[App\Http\Controllers\GameController::class,'update'])->name('updateGame');

Route::post('/updateDeveloper',[App\Http\Controllers\DeveloperController::class,'update'])->name('updateDeveloper');

Route::get('editDeveloper/{id}',[App\Http\Controllers\DeveloperController::class,'edit'])->name('editDeveloper');

Route::get('/games',[App\Http\Controllers\GameController::class,'viewGame'])->name('games');

Route::get('/developers',[App\Http\Controllers\DeveloperController::class,'viewDeveloper'])->name('developers');

Route::post('/games',[App\Http\Controllers\GameController::class,'searchGame'])->name('search.game');

Route::get('/game/{id}', [App\Http\Controllers\GameController::class,'gameDetail'])->name('game.detail');

Route::get('/character', function () {
    return view('showCharacter');
});

Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout',[App\Http\Controllers\LogoutController::class,'perform'])->name('logout.perform');
    
 });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
