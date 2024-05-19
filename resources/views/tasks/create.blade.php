@extends('layouts.app')

@section('title', 'Create Task')
<br>
@section('sidebar')
    <a href="{{ route('index') }}" class="btn btn-primary">Список задач</a>
@endsection

@section('content')
    <h1 style="text-align: center; margin-bottom: 20px;">Создать задачу</h1>
    <div class="container" style="max-width: 800px; padding: 30px; height: 400px;">
        <form action="{{ route('store') }}" method="post">
            @csrf
            <div class="form-group">
                <span style="font-weight: bold; display: block; text-align: center;">Заголовок:</span>
                <div style="text-align: center;">
                    <input type="text" name="title" required style="width: 50%; margin: 0 auto; display: block;">
                </div>
            </div>
            <div class="form-group">
                <span style="font-weight: bold; display: block; text-align: center;">Описание:</span>
                <textarea name="description" required></textarea>
            </div>
            <div class="button-group">
                <button type="submit" class="btn btn-success">Создать</button>
            </div>
        </form>
    </div>
@endsection
