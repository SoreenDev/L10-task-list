@extends('Layouts.app')
@section('styles')
@endsection
@section('title',isset($task)?'Edite task :':'Add task : ')
@section('content')

    <form action="{{  isset($task)?route('tasks.update',['task'=>$task->id]):route('tasks.store')  }}" method="POST">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div class="mb-4">
            <label for="title">title</label>
            <input type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}" @class(['border-red-500' => $errors->has('title')])>
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description">description</label>
            <textarea name="description" id="description" rows="5" @class(['border-red-500' => $errors->has('description')])>{{ $task->description ?? old('description') }}</textarea>  
            @error('description')
            <p class="error-message">{{ $message }}</p>
            @enderror  
        </div>
        
        <div class="mb-4">
            <label for="long_description">long description</label>
            <textarea name="long_description" id="long_description" rows="10" @class(['border-red-500' => $errors->has('long_description')])>{{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex gap-2 items-center">
            <button type="submit" class="btn">
                @isset($task)
                edite task
                @else
                add task
                @endisset
            </button>
            <a href="{{ route('tasks.index') }}" class="link">Cancel</a>

        </div>

    </form>
    
    
@endsection