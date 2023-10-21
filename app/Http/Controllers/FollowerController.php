<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class FollowerController extends Controller
{
    public function follow(User $user)
    {
        $follower = auth()->user();

        $follower->followings()->attach($user);

        Alert::info('Seguido Exitosamente!!', 'Has seguido a este contacto Exitosamente');

        //return redirect()->route('users.show', $user->id)->with('success', "Seguido exitosamente!!");
        return redirect()->route('users.show', $user->id);
    }

    public function unfollow(User $user)
    {
        $follower = auth()->user();

        $follower->followings()->detach($user);

        Alert::success('Se dejo de seguir!!', 'Dejaste de seguir a este contacto');

        //return redirect()->route('users.show', $user->id)->with('success', "Se dejó de Seguir!!");
        return redirect()->route('users.show', $user->id);   
    }
}
