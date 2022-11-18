<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GroupController;
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

Route::get('/home', function () {
    return view ('home');
});



Route::get ('/posts', [PostController::class, 'index'])->name('posts.index');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/post/create', [PostController::class, 'create'])->name ('posts.create');
    Route::post('/post', [PostController::class, 'store'])->name ('posts.store');
    
    
    Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name ('posts.edit');
    Route::put('/post/{post}', [PostController::class, 'update'])->name ('posts.update');

    Route::delete('/post/{post}', [PostController::class, 'destroy'])->name ('posts.destroy');
    
});


Route::get ('/post/{post}', [PostController::class, 'show'])->name ('posts.show'); 
//Route::resource('/posts', PostController::class)->parameters('posts');

// Conjunto de las rutas del recurso de Group
Route::resource('/groups', GroupController::class)->parameters('groups');




Route::get('/people', function () {
    return view ('people',['name' => 'David', 'name2' => 'David']);
})->name ('people');

Route::get ('/contact', [ContactController::class, 'create'])->name ('contact');

Route::post('/contact', [ContactController::class, 'store']); 

Route::get ('/about', function () {
    return view ('about');
})->name ('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
