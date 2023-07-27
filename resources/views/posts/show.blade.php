@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dettagli Post') }}</div>

                    <div class="card-body">
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->content }}</p>
                        @if ($post->photo)
                            <img src="{{ asset('storage/' . $post->photo) }}" alt="Post Photo" width="200">
                        @else
                            <p>Nessuna foto disponibile.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
