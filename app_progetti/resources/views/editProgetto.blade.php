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
        <input type="text" name="description" class="form-control" placeholder="Description..." value="{{$progetto->description}}">
            <input type="hidden" name="id" value="{{$progettos->id}}">
        </div>
        <div class="mb-3">
        <input type="text" name="type" class="form-control" placeholder="Type..." value="{{$progetto->type}}">
            <input type="hidden" name="id" value="{{$progettos->id}}">
        </div>
        <div class="mb-3">
        <input type="text" name="language" class="form-control" placeholder="Language..." value="{{$progetto->language}}">
            <input type="hidden" name="id" value="{{$progettos->id}}">
        </div>
        <div class="mb-3">
        <input type="text" name="state" class="form-control" placeholder="State..." value="{{$progetto->state}}">
            <input type="hidden" name="id" value="{{$progettos->id}}">
        </div>
        <button type="submit" class="btn btn-dark">Edit Progetto</button>
    </form>
@endsection