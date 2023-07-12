<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store (Request $request,$id){
       
        $comment = new Comment();
        $comment->name = $request->input('name');
        $comment->message = $request->input('message');
        $comment->post_id = $id;
        $comment->save();

    }
}
