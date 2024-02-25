@extends('Layouts.app')
@section('title','Tasks list : ')

@section('content')

    <nav class="mb-4">
        <a href="{{ route('tasks.creat') }}" class="link">Add task</a>
    </nav>
    @forelse ($tasks as $task )
        <div>
            <a href="{{ route('tasks.show',['task'=>$task->id]) }}" 
                @class(['line-through'=> $task->completed])>{{ $task->title }}</a>
        </div>
    @empty
    <div>they are not tasks!</div>
    @endforelse
    @if ($tasks->count())

        <nav class=" mt-4 ">{{ $tasks->links() }}</nav>
        
    @endif

@endsection