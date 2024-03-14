@extends('templates.layout')
@section('title', 'Progetto Detail')

@section('content')
    @if($progettos)
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$progettos->name}}</h5>
                    <p class="card-text">Year: {{$progettos->year}}</p>
                    <p class="card-text">Attività: {{$progettos->attivita_id}}</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated {{$progettos->updated_at}}</small></p>
                </div>
                <div class="card-body">
                    <a type="button" class="btn btn-outline-dark d-block" href="/progettos">Back</a>
                </div>
            </div>
        </div>
    @endif
@endsection