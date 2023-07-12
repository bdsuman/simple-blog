<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
     
           return $posts = Post::with('user','comment')->latest('updated_at')->paginate(5);
            return view('pages.article', compact('post', 'comments'));
       
    }

    public function view($id){
        return $posts = Post::with('user','comment')->where('posts.id', $id)->first();
    }
}
