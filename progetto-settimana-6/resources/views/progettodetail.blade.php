@extends('templates.layout')
@section('title', 'Progetto Detail')

@section('content')
    @if($progetto)
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$progetto->name}}</h5>
                    <p class="card-text">Year: {{$progetto->year}}</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated {{$progetto->updated_at}}</small></p>
                </div>
                <div class="card-body">
                    <a type="button" class="btn btn-outline-dark d-block" href="/progettos">Back</a>
                </div>
            </div>
        </div>
    @endif
@endsection