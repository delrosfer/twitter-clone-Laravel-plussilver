@auth()
    <div class="mb-1 bg-warning text-dark text-center" rounded >
        <div class="bg-warning text-center">
            <h4> Comparte con la red tus Ideas e Inquietudes</h4>
        </div>    
    </div>
    
    <div class="row">
        <form action="{{ route('ideas.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <textarea name="content" class="form-control" id="content" style="background-color:#87CEEB;color:#0000ff; font-family: arial" rows="2">
                    
                </textarea>
                @error('content')
                    <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>
            <div class="">
                <button type="submit" class="btn btn-dark"> Compartir </button>
            </div>
        </form>
    </div>
@endauth

@guest()
<div class="bg-warning text-center">
    <h4> Ingresa para interactuar con la red **"plusSilver"** </h4>
</div>
@endguest