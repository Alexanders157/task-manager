@extends('layouts.app')

@section('title', 'Редактировать задачу')

@section('sidebar')
    <a href="{{ route('index') }}" class="btn btn-primary">Список задач</a>
@endsection
<br>
@section('content')
    <h1 class="title">Редактировать задачу</h1>
    <div class="container">
        <form action="{{ route('update', $task->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <span style="font-weight: bold; display: block; text-align: center;">Заголовок:</span>
                <input type="text" name="title" value="{{ $task->title }}" required style="width: 50%; margin: 0 auto; display: block;">

            </div>
            <div class="form-group">
                <span style="font-weight: bold; display: block; text-align: center;">Текст:</span>
                <textarea name="description" required>{{ $task->description }}</textarea>
            </div>
            <div class="button-group">
                <button type="submit" class="btn btn-primary">Обновить</button>
                <a href="{{ route('index') }}" class="btn btn-secondary">Отмена</a>
            </div>
        </form>
    </div>
@endsection

