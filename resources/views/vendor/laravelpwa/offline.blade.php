@extends('layout.layout')

@section('content')

<div class="error_body">
    <div class="container error_container d-flex justify-content-center align-items-center">
        <h2 class="error_message text-center mb-3">Ups!!, No tienes conexión a internet</h2>
        <p class="error_paragraph text-center mb-5">
            Por favor revisa tu conexión de internet e intenta de nuevo
            <br>
            <br>
        </p>
        <br>
        <br>
        <a href="/" title="" class="btn btn-primary error_btn">
            Regresar a la página de inicio
        </a>
    </div>
</div>
@endsection