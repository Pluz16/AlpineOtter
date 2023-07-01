@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Owner List</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('owners.create') }}" class="btn btn-primary mb-3">Add Owner</a>
                        @if (session('success'))
                            <div class="alert alert-success mb-3">{{ session('success') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($owners as $owner)
                                    <tr>
                                        <td>{{ $owner->name }}</td>
                                        <td>{{ $owner->email }}</td>
                                        <td>
                                            <a href="{{ route('owners.show', $owner->id) }}" class="btn btn-primary btn-sm">View</a>
                                            <a href="{{ route('owners.edit', $owner->id) }}" class="btn btn-success btn-sm">Edit</a>
                                            <form action="{{ route('owners.destroy', $owner->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this owner?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No owners found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
