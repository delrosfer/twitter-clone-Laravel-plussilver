<div class="card overflow-hidden">
    <div class="card-body pt-3">
        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
            <li class="nav-item">
                <a class="{{ (Route::is('dashboard')) ? 'text-warning bg-info rounded' : '' }}nav-link" href="{{ route('dashboard') }}">
                    <span>Inicio</span></a>
            </li>
            <li class="nav-item">
                <a class="{{ (Request()->is('feed')) ? 'text-warning bg-info rounded' : '' }}nav-link" href="{{ url('feed') }}">
                    <span>Feed</span></a>
            </li>
            <li class="nav-item">
                <a class="{{ (Request()->is('terms')) ? 'text-warning bg-info rounded' : '' }}nav-link" href="{{ url('terms') }}">
                    <span>Terminos y condiciones</span></a>
            </li>
            
        </ul>
    </div>
    <div class="card-footer text-center py-2">
        <a class="btn btn-link btn-sm" href="{{ route('profile') }}">Ver perfil </a>
    </div>
</div>