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
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view ('home');
});



Route::get ('/wall', function () {
    $posts = [
        ['id' => 2,
        'title' => 'Primer post',
        'content' => 'Contenido del primer post que hago con un array asociativo'],
        ['id' => 5,
        'title' => 'Segundo post',
        'content' => 'Middleware group. Now create something great!'],
        ['id' => 8,
        'title' => 'Tercer post',
        'content' => 'contains the "web" middleware group Middleware group. Now create something great!'],
        ['id' => 10,
        'title' => 'Cuarto post',
        'content' => 'Here is where you can register we Middleware group. Now create something great!'],
    ];
    return view ('wall', ['posts' => $posts]);
})->name('wall');

Route::get ('/post/{id}', function ($id) {
    $posts = [
        ['id' => 2,
        'title' => 'Primer post',
        'content' => 'Contenido del primer post que hago con un array asociativo'],
        ['id' => 5,
        'title' => 'Segundo post',
        'content' => 'Middleware group. Now create something great!'],
        ['id' => 8,
        'title' => 'Tercer post',
        'content' => 'contains the "web" middleware group Middleware group. Now create something great!'],
        ['id' => 10,
        'title' => 'Cuarto post',
        'content' => 'Here is where you can register we Middleware group. Now create something great!'],
    ];
    
    // dd ($posts);

    $postDetalle = null;

    foreach ($posts as $post) {
        if ($post['id'] == $id) {
            // lo he encontrado en el array
            $postDetalle = $post;
        }
    }

    return view ('post', ['post' => $postDetalle]);    

})->name ('post');


Route::get('/people', function () {
    return view ('people',['name' => 'David', 'name2' => 'David']);
})->name ('people');

Route::get ('/contact', function () {
    return view ('contact');
})->name ('contact');

Route::get ('/about', function () {
    return view ('about');
})->name ('about');
