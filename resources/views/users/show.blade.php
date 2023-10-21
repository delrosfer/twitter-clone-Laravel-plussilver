@extends('layout.layout')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-3">
                @include('shared.left-sidebar')
            </div>
            <div class="col-6">
                @include('shared.success-message')
                
                <div class="mt-3">
                @include('users.shared.user-card')
                    
                </div>
                <hr>
                @forelse ($ideas as $idea)
                    <div class="mt-3">
                        @include('ideas.shared.idea-card')
                        
                    </div>

                @empty
                    <p class="text-center mt-4">No se encontraron resultados</p>

                @endforelse

                <div class="mt-3">
                    {{ $ideas->withQueryString()->links() }}
                </div>
            </div>
            <div class="col-3">
                @include('shared.search-bar')
                @include('shared.follow-box')
                
            </div>
        </div>
    </div>
    
@endsection