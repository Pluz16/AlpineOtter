@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Owner Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <strong>Name:</strong> {{ $owner->name }}
                        </div>
                        <div class="mb-3">
                            <strong>Email:</strong> {{ $owner->email }}
                        </div>
                        <div class="mb-3">
                            <strong>Phone Number:</strong> {{ $owner->phone_number }}
                        </div>
                        <div class="mb-3">
                            <strong>Dogs:</strong>
                            <ul>
                                @forelse ($owner->dogs as $dog)
                                    <li>{{ $dog->name }}</li>
                                @empty
                                    <li>No dogs found.</li>
                                @endforelse
                            </ul>
                        </div>
                        <a href="{{ route('owners.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
