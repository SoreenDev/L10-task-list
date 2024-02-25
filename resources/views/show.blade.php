@extends('Layouts.app')

@section('title',$task->title)



@section('content')
    <nav class="mb-4">
        <a href="{{ route('tasks.index') }}" class="link">← Back to the task list</a>
    </nav>

    <p class="mb-4 text-slate-700">{{ $task->description }}</p>
    @isset($task->long_description)
        <p class="mb-4 text-slate-700">{{ $task->long_description }}</p>
    @endisset
    <p class="mb-4 text-sm text-slate-500">Created {{ $task->created_at->diffForHumans() }} ⇨  Updated {{ $task->updated_at->diffForHumans() }}</p>
    <div class="mb-4">
        @if ($task->completed)
           <span class="font-medium text-green-500">completed</span> 
        @else
            <span class="font-medium text-red-500">Not completed</span>
        @endif

    </div>

    <div class="flex gap-2">
        <a href="{{ route('tasks.edit',['task'=>$task]) }}"class="btn">edit</a>
        <form action="{{ route('tasks.toggel-copleted',['task'=>$task]) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit"class="btn">
                Mark as {{ $task->completed ? 'completed' : ' No completed' }}
            </button>
        </form>
        <form action="{{ route('task.destory',['task'=> $task->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit"class="btn">Delete</button>
        </form> 
    </div>
@endsection