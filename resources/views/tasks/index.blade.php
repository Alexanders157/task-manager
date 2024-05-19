@extends('layouts.app')

@section('title', 'Tasks')
<br>
@section('sidebar')
    <a href="{{ route('create') }}" class="btn btn-success">Создать задачу</a>
@endsection

@section('content')
    <h1 class='title'> Список задач </h1>
    <ul>
        @foreach($tasks as $task)
            <li>
                <div class="container">
                    <span style="font-weight: bold; text-align: center; display: block; margin: 0 auto;">{{ $task->title }}</span>
                    @if($task->completed)
                        <span style="color: green;">&#10004;</span>
                    @endif
                    <br>
                    <div class="button-group">
                        <a href="{{ route('show', $task->id) }}" class="btn btn-primary">Открыть</a>
                        <a href="{{ route('edit', $task->id) }}" class="btn btn-secondary">Редактировать</a>
                        <form action="{{ route('destroy', $task->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    <div class="pagination">
        {{ $tasks->links('pagination::default', ['class' => 'pagination pagination-sm', 'dotted' => false]) }}
    </div>
@endsection
