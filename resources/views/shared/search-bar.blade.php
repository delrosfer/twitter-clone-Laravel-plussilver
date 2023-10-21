<div class="card">
    <div class="card-header pb-0 border-0">
        <h5 class="">Buscar</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('dashboard') }}" method="GET">
            <input value="{{ request('search', '') }}" name="search" placeholder="..." class="form-control w-100" type="text">
            <button class="btn btn-info mt-2"> Buscar</button>
        </form>
    </div>
</div>