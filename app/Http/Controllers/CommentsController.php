<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function create()
    {
        return view('comments.create');
    }


    public function store(Request $request)
    {
            
        
         // Create Comment
         $response = new Comment;
         $response->comment = $request->input('comment');
       
         $response->save();
 
         return redirect('/posts/{{$post->id}}')->with('success', 'Comment Created');

    }

    
}
