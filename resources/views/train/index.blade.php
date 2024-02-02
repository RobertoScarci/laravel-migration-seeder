@extends('layouts.app')

@section('title', 'Trains Homepage')

@section('main-content')
    <div class="container mt-5">
        <div class="row">
            @forelse($trains as $train)
            <div class="col-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $train->azienda }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $train->codice_treno }}</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="fw-bold">Stazione di partenza:</span> {{ $train->stazione_di_partenza }}</li>
                        <li class="list-group-item"><span class="fw-bold">Stazione d'arrivo:</span> {{ $train->stazione_di_arrivo}}</li>
                        <li class="list-group-item"><span class="fw-bold">Orario di partenza:</span> {{ $train->orario_partenza }}</li>
                        <li class="list-group-item"><span class="fw-bold">Orario d'arrivo:</span> {{ $train->orario_arrivo }}</li>
                        <li class="list-group-item"><span class="fw-bold">Numero di carrozze:</span> {{ $train->numero_carrozze }}</li>
                        <li class="list-group-item"><span class="fw-bold">In orario: </span> {{ $train->in_orario ? 'Yes' : 'No' }} </li>
                        <li class="list-group-item"><span class="fw-bold">Cancellato: </span> {{ $train->cancellato ? 'Yes' : 'No' }} </li>
                    </ul>
                </div>
            </div>
            @empty

            @endforelse
        </div>
    </div>
@endsection