@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
    <h1>Tasks</h1>
    <ul>
        @foreach($tasks as $task)
            <li>
                {{ $task->title }}
                ({{ $task->completed ? 'Completed' : 'Not completed' }})
                <a href="{{ route('show', $task->id) }}">View</a>
                <a href="{{ route('edit', $task->id) }}">Edit</a>
                <form action="{{ route('destroy', $task->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    {{ $tasks->links() }}
@endsection
