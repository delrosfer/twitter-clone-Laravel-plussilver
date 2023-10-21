@auth()
    <div class="mb-1 bg-warning text-dark text-center" rounded >
        <blockquote class="blockquote">
          <p>Comparte tus ideas</p>
        </blockquote>    
    </div>
    
    <div class="row">
        <form action="{{ route('ideas.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <textarea name="content" class="form-control" id="content" style="background-color:#87CEEB;color:#0000ff; font-family: arial" rows="2"></textarea>
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
    <h4> Ingresa para compartir tus ideas </h4>
@endguest