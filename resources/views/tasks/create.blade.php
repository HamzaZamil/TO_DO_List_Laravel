@extends('layouts.app')

@section('content')

        <h1>New Task</h1>
        
        @if($errors -> any())
            <div class="alert alert-secondary" role="danger">
            <ul>
                @foreach($errors -> all() as $error)
                     <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
        @endif
        <form method="POST" action="/tasks">
            @csrf
            <div class="form-group mb-3">
                <label for="description">Task Description</label>
                <input class="form-control" name="description" />
            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-secondary">Create Task</button>

            </div>

        </form>
        
@endsection  