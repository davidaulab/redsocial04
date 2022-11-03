<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WallController extends Controller
{
    //
  /*  private $posts = [
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
        ['id' => 17,
        'title' => 'Quinto post',
        'content' => 'Here is where you can register we Middleware group.que hago con un array asociativo'],
    ]; */

    private function getPosts () {
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
            ['id' => 17,
            'title' => 'Quinto post',
            'content' => 'Here is where you can register we Middleware group.que hago con un array asociativo'],
        ];
        return $posts;
    }
    
    public function index (){
        return view ('wall', ['posts' => $this->getPosts()]);
    }

    public function show ($id) {
        $posts = $this->getPosts();
        
        // dd ($posts);
    
        $postDetalle = null;
    
        foreach ($posts as $post) {
            if ($post['id'] == $id) {
                // lo he encontrado en el array
                $postDetalle = $post;
            }
        }
        
        return view ('post', ['post' => $postDetalle]);    
    }

}
