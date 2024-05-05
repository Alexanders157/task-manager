@extends('layouts.app')

@section('title', 'Edit')

@section('content')

@section('content')
    <h1>Edit Task</h1>
    <form action="{{ route('update', $task->id) }}" method="post">
        @csrf
        @method('PATCH')
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $task->title }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" required>{{ $task->description }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
@endsection
