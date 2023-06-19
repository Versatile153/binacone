<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('post.create');
    }

    public function store(Request $request){
        $post=new Post();
        $post->title=$request->input('title');
        $post->author=$request->input('author');
        $post->body=$request->input('body');

        $post->save();
    }

    
    public function posts(){
      $posts=Post::all();
        return view('post.index',compact('posts'));
    }


    public function show($id){
       $post=Post::find($id);
      return view('post.show',compact('post'));
    }


    public function edit($id){
        $post=Post::find($id);
        return view('post.edit',compact('post'));
    }
    public function update(Request $request,$id){
        $post=Post::find($id);
        $post->title=$request->input('title');
        $post->author=$request->input('author');
        $post->body=$request->input('body');

        $post->save();

        return redirect('/posts');
        
    }

    public function destroy($id){
        $post=Post::find($id);
        $post->delete();
        return redirect('/posts');
       
    }
}
