@extends('templates.layout')
@section('title', 'New Progetto')

@section('content')
    <form method="post" action="/progettos">
        @csrf
        <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Name...">
        </div>
        <div class="mb-3">
            <input type="text" name="description" class="form-control" placeholder="Description...">        
        </div>
        <div class="mb-3">
            <input type="text" name="type" class="form-control" placeholder="Type...">        
        </div>
        <div class="mb-3">
            <input type="text" name="language" class="form-control" placeholder="Language...">        
        </div>
        <div class="mb-3">
            <input type="text" name="state" class="form-control" placeholder="State...">        
        </div>
        <button type="submit" class="btn btn-dark">Add Progetto</button>
    </form>
@endsection