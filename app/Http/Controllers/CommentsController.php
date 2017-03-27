<?php

namespace App\Http\Controllers;

use App\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        $comments = Comments::paginate(30);
        return view('comments.index', compact('comments'));

    }

    public function edit($id)
    {
        $comments = Comments::find($id);
        return view('comments.edit',compact('comments'));
    }

    public function update(Request $request,$id)
    {
        $comment = Comments::find($id);
        $comment->nick = $request->input('nick');
        $comment->comments = $request->input('comment');
        $comment->save();
        return redirect('/comments');
    }

    public function destroy($id)
    {
        $comment = Comments::find($id);
        $comment->delete();
        return redirect('/comments');
    }
}
