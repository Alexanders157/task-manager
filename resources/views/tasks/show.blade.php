@extends('layouts.app')

@section('title', 'Task')

@section('content')
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <p>Completed: {{ $task->completed ? 'Yes' : 'No' }}</p>
    <a href="{{ route('edit', $task->id) }}">Edit</a>
    <form action="{{ route('destroy', $task->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
