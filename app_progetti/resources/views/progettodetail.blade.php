@extends('templates.layout')
@section('title', 'Progetto Detail')

@section('content')
    @if($progettos)
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$progettos->name}}</h5>
                    <p class="card-text">Description: {{$progettos->description}}</p>
                    <p class="card-text">Type: {{$progettos->type}}</p>
                    <p class="card-text">Language: {{$progettos->language}}</p>
                    <p class="card-text">State: {{$progettos->state}}</p>
                    <p class="card-text"><small class="text-body-secondary">User {{$progettos->user_id}}</small></p>
                    <p class="card-text"><small class="text-body-secondary">Attivita {{$progettos->attivita_id}}</small></p>
                    <p class="card-text"><small class="text-body-secondary">Last create {{$progettos->created_at}}</small></p>
                    <p class="card-text"><small class="text-body-secondary">Last updated {{$progettos->updated_at}}</small></p>
                </div>
                <div class="card-body">
                    <a type="button" class="btn btn-outline-dark d-block" href="/progettos">Back</a>
                </div>
            </div>
        </div>
    @endif
@endsection