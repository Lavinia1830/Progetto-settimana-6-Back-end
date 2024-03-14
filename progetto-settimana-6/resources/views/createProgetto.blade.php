@extends('templates.layout')
@section('title', 'New Progetto')

@section('content')
    <form method="post" action="/progettos">
        @csrf
        <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Name...">
        </div>
        <div class="mb-3">
            <input type="text" name="year" class="form-control" placeholder="Year...">        
        </div>
        <button type="submit" class="btn btn-dark">Add Progetto</button>
    </form>
@endsection