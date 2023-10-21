<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;
use App\Policies\IdeaPolicy;
use RealRashid\SweetAlert\Facades\Alert;

class IdeaController extends Controller
{
    public function show(Idea $idea)
    {
        return view('ideas.show', compact('idea') );
    }

    public function store()
    {

        $validated = request()->validate([
            'content' => 'required|min:4|max:200'
        ]);

        $validated['user_id'] = auth()->id();

        Idea::create($validated);

        Alert::info('Publicación creada Exitosamente!!', 'Tu publicación ha sido publicada Exitosamente');

        //return redirect()->route('dashboard')->with('success', 'Publicación creada exitosamente!!.');
        return redirect()->route('dashboard');
    }

    public function destroy(Idea $idea)
    {

        $this->authorize('delete', $idea);

        $idea->delete();

        Alert::warning('Publicación eliminada Exitosamente!!', 'Tu publicación ha sido eliminada Exitosamente de la red');

        //return redirect()->route('dashboard')->with('success', 'Publicación eliminada exitosamente!!.');
        return redirect()->route('dashboard');        
    }

    public function edit(Idea $idea)
    {

        $this->authorize('update', $idea);

        $editing = true;

        return view('ideas.show', compact('idea', 'editing') );
    }

    public function update(Idea $idea)
    {

        $this->authorize('update', $idea);
        
        $validated = request()->validate([
            'content' => 'required|min:4|max:200'
        ]);

        $idea->update($validated);

        Alert::success('Publicación actualizada Exitosamente!!', 'Tu idea fue actualizada con Éxito');

        //return redirect()->route('ideas.show', $idea->id)->with('success', 'Publicacion actualizada Exitosamente!!');
        return redirect()->route('ideas.show', $idea->id);
    }
}
