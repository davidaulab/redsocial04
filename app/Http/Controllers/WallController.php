<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\WallRequest;
use App\Models\Post;

class WallController extends Controller
{
    


    public function index (Request $request){
        
        $code = $request->code;
        $message = $request->message; 
       /* $posts = DB::table('post')->get(); */
        $posts = Post::orderByDesc('id')->get();

        return view ('wall', compact('posts', 'code', 'message'));
 }

    public function show (Post $post) {
        /* $post = DB::table('post')->find($id); */
        return view ('post', compact ('post'));    
    }

    public function create () {
        return view ('editpost');
    }
    public function store (WallRequest $request) {
        //dd($request);
        $url ='';
        if ($request->hasFile('img')) {
            $img = $request->file('img')->store ('public/posts');
            $url = Storage::url($img);
        }
 
/*
        DB::table('post')->insert ([
            'title' => $request->title,
            'content' => $request->content,
            'img' => $url
        ]);
        */
       /* $post = Post::create ([
            'title' => $request->title,
            'content' => $request->content,
            'img' => $url
        ]); 
        $post->saveOrFail (); */
        $post = Post::create ($request->validated());
        $post->img = $url;
        $post->saveOrFail ();
        return redirect()->route ('wall',['code' => '200', 'message' => 'Post creado correctamente']);

    }

    public function edit (Post $post) { // igual que el show
        /* $post = DB::table('post')->find($id); */

        
        return view ('updatepost', compact ('post'));  
        //return view ('updatepost',  ['post' => $post]);  
          
    }
    public function update (WallRequest $request, Post $post) { // igual que el store
        //dd($request);
        $url ='';
        if ($request->hasFile('img')) {
            $img = $request->file('img')->store ('public/posts');
            $url = Storage::url($img);
        }
 
        $post->fill ($request->validated());
        $post->img = $url;
        $post->saveOrFail ();
        return redirect()->route ('wall',['code' => '200', 'message' => 'Post creado correctamente']);

    }
    public function destroy ( Post $post) { // igual que el update
      
        $post->deleteOrFail();
        return redirect()->route ('wall',['code' => '200', 'message' => 'Post borrado correctamente']);
    }
}
