<?php

namespace App\Http\Controllers;

use Gate;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;
use App\Comment;

class CommentController extends Controller
{
    public function edit(Comment $comment)
    {
//        auth()->loginUsingId(10);

        if(Gate::denies('edit_comments' , $comment)){
            abort(403,'Sorry this Page does not belong to you');
        }
//        $this->authorize('edit_comments', $comment);

        return view('comment_edit',compact('comment'));
    }

    public function store(Comment $comment , Request $request)
    {
        $comment->body = $request->body;
        $comment->save();
        return redirect()->route('show.product',['id'=>$comment->product_id]);
    }
}
