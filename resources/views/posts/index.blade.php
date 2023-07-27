@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Elenco dei Post') }}</div>

                    <div class="card-body">
                        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Nuovo Post</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Titolo</th>
                                    <th>Contenuto</th>
                                    <th>Foto</th>
                                    <th>Azioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->content }}</td>
                                        <td>
                                            @if ($post->photo)
                                                <img src="{{ asset('storage/' . $post->photo) }}" alt="Post Photo" width="100">
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-primary">Visualizza</a>
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">Modifica</a>
                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questo post?')">Elimina</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
