<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Repositories\Posts;
use Carbon\Carbon;
 

class PostsController extends Controller
{ 
    public function __constuct()
    {
        $this->middleware('auth')->except(['index','show']);
         
    }
    
    public function index(\App\Tag $tag = null)
    {   
        
        return $tag;

        $posts = Post::latest()
        ->filter(request(['month', 'year']))
        ->get();

        return view('index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

public function create()
    { 
    	return view('create');
    }

    public function store()

    {
        $this->validate(Request(), [
            'title' => 'required',
             'body' => 'required'
            ]);

         auth()->user()->publish(
            new Post(request(['title','body'])));
         session()->flash(
            'message', 'Your post has now been published.');

    	 /*$post = new Post;
    	 $post->title = request('title');
    	 $post->body = request('body');
    	 $post->save(); */
 
    	
    	 return redirect('/');
    }

}