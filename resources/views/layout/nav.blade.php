<nav class="navbar navbar-expand-lg bg-info border-bottom border-bottom-orange ticky-top"
    data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand fw-light" href="/"><span class="fas fa-upload me-1"> </span>{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="{{ (Route::is('login')) ? 'active' : '' }} nav-link active" aria-current="page" href="{{ route('login') }}">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ (Route::is('register')) ? 'active' : '' }} nav-link" href="{{ route('register') }}">Registrarse</a>
                    </li>
                @endguest

                @auth()
                    @if(Auth::user()->is_admin)
                    <li class="nav-item h5 bg-transparent">
                        <a class="{{ (Route::is('admin.dashboard')) ? 'active' : '' }} bg-warning text-dark nav-link" href="{{ route('admin.dashboard') }}">Admin</a>
                    </li>
                    @endif
                    <li class="nav-item h5 bg-transparent">
                        <a class="{{ (Route::is('profile')) ? 'active' : '' }} bg-warning text-dark nav-link" href="{{ route('profile') }}">Usuario: {{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                                @csrf
                            <button class="btn btn-danger bt-sm" type="submit"> Salir </button> 
                        </form>
                    </li><article></article>
                @endauth
            </ul>
        </div>
    </div>
</nav><a href="" title=""></a>