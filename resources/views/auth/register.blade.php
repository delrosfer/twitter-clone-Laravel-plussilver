@extends('layout.layout')

@section('content')
 <div class="row justify-content-center">
    <div class="col-12 col-sm-8 col-md-6">
        <form class="form mt-5" action="{{ route('register') }}" method="post">
            @csrf
            <h3 class="text-center text-dark">Registrarse</h3>
            <div class="form-group">
                <label for="name" class="text-dark">Nombre:</label><br>
                <input type="text" name="name" id="name" class="form-control">
                @error('name')
                    <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" class="text-dark">Correo Electrónico:</label><br>
                <input type="email" name="email" id="email" class="form-control">
                @error('email')
                    <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="password" class="text-dark">Contraseña:</label><br>
                <input type="password" name="password" id="password" class="form-control">
                @error('password')
                    <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="confirm-password" class="text-dark">Confirmar Contraseña:</label><br>
                <input type="password" name="password_confirmation" id="confirm-password" class="form-control">
                @error('password_confirmation')
                    <span class="d-block fs-6 text-danger mt-2"> {{ $message }} </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="remember-me" class="text-dark"></label><br>
                <input type="submit" name="submit" class="btn btn-dark btn-md" value="Registrarse">
            </div>
            <div class="text-right mt-2">
                <a href="/login" class="text-dark">Ingresar Aqui</a>
            </div>
        </form>
    </div>
</div>

@endsection