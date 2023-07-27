@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Modifica Post') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">{{ __('Titolo') }}</label>
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title }}" required autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="content">{{ __('Contenuto') }}</label>
                                <textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content" rows="4" required>{{ $post->content }}</textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="photo">{{ __('Foto') }}</label>
                                <input id="photo" type="file" class="form-control-file @error('photo') is-invalid @enderror" name="photo">
                                @if ($post->photo)
                                    <img src="{{ asset('storage/' . $post->photo) }}" alt="Post Photo" width="200">
                                @else
                                    <p>Nessuna foto disponibile.</p>
                                @endif
                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Salva Modifiche') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
