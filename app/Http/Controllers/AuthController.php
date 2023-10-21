<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store()
    {

        $validated = request()->validate(
            [
                'name' => 'required|min:3|max:40',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed|min:8'
            ]
        );

        $user = User::create(
            [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]
        );
        Mail::to($user->email)
        ->send(new WelcomeEmail($user));

        Alert::info('Registro exitoso!!', 'Usuario registrado Exitosamente!!');

        //return redirect()->route('dashboard')->with('success', 'Usuario registrado Exitosamente!!');
        return redirect()->route('dashboard');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate()
    {

        $validated = request()->validate(
            [
                
                'email' => 'required|email',
                'password' => 'required|min:8'
            ]
        );

        if (auth()->attempt($validated)) {
            request()->session()->regenerate();

            Alert::success('Acceso correcto!!', 'Las credenciales son correctas!!');

            //return redirect()->route('dashboard')->with('success', 'Las credenciales son correctas!!');
            return redirect()->route('dashboard');
        }

        Alert::warning('Datos incorrectos!!', 'Verificar correo y contraseña, no existe usuario y/o contraseña');
        //return redirect()->route('login')->withErrors([
        //    'email' => "Verificar correo y contraseña, no existe usuario"
        //]);
        return redirect()->route('login');
    }

    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        Alert::success('Finalizaste la sesion!!', 'Finalizaste sesion correctamente!!, regresa pronto');

        //return redirect()->route('dashboard')->with('success', 'Finalizaste sesion correctamente!!');
        return redirect()->route('dashboard');
    }
}
