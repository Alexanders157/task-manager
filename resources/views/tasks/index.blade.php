{{-- @extends('layouts.app') --}}

@section('content')
    <h1>Tasks</h1>
    <ul>
        @foreach($tasks as $task)
            <li>
                {{ $task->title }}
                ({{ $task->completed ? 'Completed' : 'Not completed' }})
                <a href="{{ route('tasks.show', $task->id) }}">View</a>
                <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    {{ $tasks->links() }}
@endsection
