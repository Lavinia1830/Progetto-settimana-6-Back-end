@extends('templates.layout')
@section('title', 'Edit Progetto')

@section('content')
    <form method="post" action="/progettos">
        @csrf
        <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Name..." value="{{$progetto->name}}">
            <input type="hidden" name="id" value="{{$progettos->id}}">
        </div>
        <div class="mb-3">
        <input type="text" name="year" class="form-control" placeholder="Year..." value="{{$progetto->year}}">
            <input type="hidden" name="id" value="{{$progettos->id}}">
        </div>
        <button type="submit" class="btn btn-dark">Edit Progetto</button>
    </form>
@endsection