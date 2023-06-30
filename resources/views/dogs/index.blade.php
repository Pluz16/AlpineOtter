@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Dogs</h5>
        </div>
        <div class="card-body">
            <a href="{{ route('dogs.create') }}" class="btn btn-primary mb-3">Add Dog</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Pedigree</th>
                        <th>Birthdate</th>
                        <th>Owner</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dogs as $dog)
                        <tr>
                            <td>{{ $dog->name }}</td>
                            <td>{{ $dog->pedigree }}</td>
                            <td>{{ $dog->birthdate }}</td>
                            <td>{{ $dog->owner->name }}</td>
                            <td>
                                <a href="{{ route('dogs.edit', $dog->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('dogs.destroy', $dog->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this dog?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
