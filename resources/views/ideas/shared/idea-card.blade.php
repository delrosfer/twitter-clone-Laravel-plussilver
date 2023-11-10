<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                    src="{{ $idea->user->getImageURL() }}" alt="{{ $idea->user->name }}">
                <div>
                    <h5 class="card-title mb-0"><a href="{{ route('users.show', $idea->user->id) }}"> {{ $idea->user->name }}
                        </a></h5>
                </div>
            </div>
            <div class="d-flex">
                <a href="{{ route('ideas.show', $idea->id) }}" title=""><font size="4" color="blue">Ver</font></a>
                @auth()
                    @can('update', $idea)
                        <a class="mx-2 " href="{{ route('ideas.edit', $idea->id) }}" title=""><font size="4" color="green">Editar</font> </a>
                        <form method="POST" action="{{ route('ideas.destroy', $idea->id) }}">
                            @csrf
                            @method('delete')                            
                            <button class="btn btn-danger btn-sm ms-1"><font size="4">X</font> </button>
                        </form>
                    @endcan
                @endauth
            </div>
        </div>
    </div>

    
    <div class="card-body">
        @if($editing ?? false)

            <form action="{{ route('ideas.update', $idea->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <textarea name="content" class="form-control" id="content" style="color:#0000ff; font-family: arial" rows="3">{{ $idea->content }}</textarea>
                    @error('content')
                        <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                    @enderror
                </div>
                <div class="">
                    <button type="submit" class="btn btn-dark mb-2 btn-sm"> Actualizar </button>
                </div>
            </form>

        @else
            <p class="fs-6 fw-light text-muted">
                {{ $idea->content }}
            </p>
        @endif
        <div class="d-flex justify-content-between">
            @include('ideas.shared.like-button')
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{ $idea->created_at->diffForHumans(['parts' => 2]) }} </span>
            </div>
        </div>
        @include('ideas.shared.comments-box')
    </div>
</div>