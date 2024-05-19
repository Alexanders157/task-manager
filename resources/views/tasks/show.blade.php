@extends('layouts.app')

@section('title', 'Task')

<br>
@section('sidebar')
    <a href="{{ route('index') }}" class="btn btn-primary">Список задач</a>
@endsection

@section('content')
    <h1 class="title">{{ $task->title }}</h1>
    <div class="container">
        <p>{{ $task->description }}</p>
        <div class="button-group">
            <a href="{{ route('edit', $task->id) }}" class="btn btn-secondary">Редактировать</a>
            <form action="{{ route('destroy', $task->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Удалить</button>
            </form>
        </div>
    </div>
@endsection
