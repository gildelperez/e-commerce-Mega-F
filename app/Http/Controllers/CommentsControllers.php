<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CommentFormRequest;
use App\Comment;

class CommentsControllers extends Controller
{
    //
    public function newComment(CommentFormRequest $request)
    {
        $comment = new Comment(array(
            'post_id' => $request->get('post_id'),
            'content' => $request->get('content')
        ));

        $comment->save();
        return redirect()->back()->with('status','¡Tu Comentario ha sido creado!');
    }


}
