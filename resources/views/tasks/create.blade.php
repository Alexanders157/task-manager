@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
    <h1>Create Task</h1>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" required></textarea>
        <br>
        <button type="submit">Create</button>
    </form>
@endsection
