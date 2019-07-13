<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Redirect;

class CommentsController extends Controller
{
    public function newComment(Request $request){
        $comment = $request->all();
        Comment::create($comment);
        return redirect()->back()->with('status','Your comment have been created!');
    }
}
