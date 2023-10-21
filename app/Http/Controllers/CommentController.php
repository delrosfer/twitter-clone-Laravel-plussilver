<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;
use App\Models\Comment;
use RealRashid\SweetAlert\Facades\Alert;

class CommentController extends Controller
{
    public function store(Idea $idea)
    {
        $comment = new Comment();
        $comment->idea_id = $idea->id;
        $comment->user_id = auth()->id();

        $comment->content = request()->get('content');
        $comment->save();

        Alert::info('Comentario publicado Exitosamente!!', 'Tu comentario ha sido publicado Exitosamente');

        //return redirect()->route('ideas.show', $idea->id)->with('success', "Comentario publicado exitosamente!!");
        return redirect()->route('ideas.show', $idea->id);

    }
}
