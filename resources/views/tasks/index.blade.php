@extends('layouts.app')

@section('content')


<h1>Task List</h1>   

@foreach($tasks as $task)
  <div class="card @if($task -> isCompleted()) border-success @endif " style="margin-bottom: 10px;">
    <div class="card-body">
      <p>
          @if( $task -> isCompleted() )
           <span class="badge text-bg-success">Completed</span>
          @endif

         {{ $task->description }}
      </p>

      @if(!$task -> isCompleted())

       <form action="/tasks/{{ $task -> id}}" method="POST" class="d-grid mb-2 mb-1">
            @method('PATCH')
            @csrf
            <button class="btn btn-secondary " input="submit"> complete</button>
       </form>

       @else
       <form action="/tasks/{{ $task -> id}}" method="POST" class="d-grid mb-2 mb-1">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger " input="submit"> Delete</button>
       </form>

     @endif

    </div>
  </div>
@endforeach

<a href="/tasks/create" class="btn btn-primary  d-grid mb-2 mt-1">New Task</a>
@endsection
