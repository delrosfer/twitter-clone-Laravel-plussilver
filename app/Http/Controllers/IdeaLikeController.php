<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;
use RealRashid\SweetAlert\Facades\Alert;

class IdeaLikeController extends Controller
{
    public function like(Idea $idea)
    {
        $liker = auth()->user();

        $liker->likes()->attach($idea);

        Alert::info('Me gusta, exitoso!!', 'Tu "Me Gusta" ha sido exitoso');

        //return redirect()->route('dashboard')->with('success', 'Me gusta, exitoso!!');
        return redirect()->route('dashboard');
    }

    public function unlike(Idea $idea)
    {
        $liker = auth()->user();

        $liker->likes()->detach($idea);

        Alert::success('No Me gusta, exitoso!!', 'Tu "No Me Gusta" ha sido exitoso');

        //return redirect()->route('dashboard')->with('success', 'No Me gusta, exitoso!!');
        return redirect()->route('dashboard');   
    }
}
