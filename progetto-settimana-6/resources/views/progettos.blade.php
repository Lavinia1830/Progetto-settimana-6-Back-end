@extends('templates.layout')
@section('title', 'ProgettoList')

@section('content')
    <ul class="list-group list-group-flush">
        @if($progettos)
            @foreach($progettos as $key => $value)
                <li class="list-group-item">
                    {{$value->name}} | year {{$value->year}}
                    <span class="float-end">
                        <a type="button" class="btn btn-outline-info" href="/progettos/{{$value->id}}">Info</a>
                    </span>
                </li>
            @endforeach
        @endif
    </ul>
@endsection