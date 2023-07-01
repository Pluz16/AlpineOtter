@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">{{ $dog->name }}</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset($dog->photo) }}" alt="{{ $dog->name }}" class="img-fluid mb-3">
                </div>
                <div class="col-md-6">
                    <p><strong>Pedigree:</strong> {{ $dog->pedigree }}</p>
                    <p><strong>Birthdate:</strong> {{ $dog->birthdate }}</p>
                    <p><strong>Owner:</strong> {{ $dog->owner->name }}</p>
                    <p><strong>Description:</strong> {{ $dog->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
