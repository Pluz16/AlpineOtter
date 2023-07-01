@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Modifica Cane') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('dogs.update', $dog->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

                                <div class="col-md-6">
                                    <input id="photo" type="file" class="form-control-file @error('photo') is-invalid @enderror" name="photo" accept="image/*">

                                    @error('photo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $dog->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pedigree" class="col-md-4 col-form-label text-md-right">{{ __('Pedigree') }}</label>

                                <div class="col-md-6">
                                    <input id="pedigree" type="text" class="form-control @error('pedigree') is-invalid @enderror" name="pedigree" value="{{ $dog->pedigree }}" required autocomplete="pedigree">

                                    @error('pedigree')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- ... -->

<div class="form-group row">
    <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Data di nascita') }}</label>

    <div class="col-md-6">
        <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ $dog->birthdate }}" required autocomplete="birthdate">

        @error('birthdate')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>



<div class="form-group row">
    <label for="owner_id" class="col-md-4 col-form-label text-md-right">{{ __('Owner') }}</label>

    <div class="col-md-6">
        <select id="owner_id" class="form-control @error('owner_id') is-invalid @enderror" name="owner_id">
            @foreach ($owners as $owner)
                <option value="{{ $owner->id }}" {{ $owner->id == $dog->owner_id ? 'selected' : '' }}>{{ $owner->name }}</option>
            @endforeach
        </select>

        @error('owner_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descrizione') }}</label>

    <div class="col-md-6">
        <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" rows="4">{{ $dog->description }}</textarea>

        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<!-- ... -->


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Salva Modifiche') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
