<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
            return view('pages.index');
    }

    public function load_post(){
        $posts = Post::with('user','comment')->latest('updated_at')->get();
        return $posts;
       
    }

    public function view($id){
        $post = Post::with('user','comment')->where('posts.id', $id)->first();
        return view('pages.post',compact('post'));
    }
}
