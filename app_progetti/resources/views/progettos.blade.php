@extends('templates.layout')
@section('title', 'Progetto List')

@section('content')
<a type="button" class="btn btn-outline-dark" href="progettos/create">Add Product</a>
    <ul class="list-group list-group-flush">
        @if($progettos)
            @foreach($progettos as $key => $value)
                <li class="list-group-item">
                    {{$value->name}} | language {{$value->language}}
                    <span class="float-end">
                        <a type="button" class="btn btn-outline-info" href="progettos/{{$value->id}}">Info</a>
                        <a type="button" class="btn btn-outline-warning" href="progettos/{{$value->id}}/edit">Edit</a>
                        <a type="button" class="btn btn-outline-danger" href="progettos/{{$value->id}}/destroy">Delete</a>
                    </span>
                </li>
            @endforeach
        @endif
    </ul>
@endsection