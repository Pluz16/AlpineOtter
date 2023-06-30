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

                            <!-- Campi del modulo per la modifica del cane -->
                            <!-- Utilizza le stesse logiche di validazione e struttura dei campi come nella vista "create.blade.php" -->

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
