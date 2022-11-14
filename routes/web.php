<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\WallController;
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



Route::get ('/wall', [WallController::class, 'index'])->name('wall');

Route::get('/createpost', [WallController::class, 'create'])->name ('newpost');
Route::post('/savepost', [WallController::class, 'store'])->name ('savepost');


Route::get('/editpost/{post}', [WallController::class, 'edit'])->name ('editpost');
Route::post('/updatepost/{post}', [WallController::class, 'update'])->name ('updatepost');



Route::get ('/post/{post}', [WallController::class, 'show'])->name ('post');


Route::get('/people', function () {
    return view ('people',['name' => 'David', 'name2' => 'David']);
})->name ('people');

Route::get ('/contact', [ContactController::class, 'create'])->name ('contact');

Route::post('/contact', [ContactController::class, 'store']); 

Route::get ('/about', function () {
    return view ('about');
})->name ('about');

