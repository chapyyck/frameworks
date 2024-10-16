@extends('layouts.app')

@section('title', 'Список задач')

@section('content')
    <h2>Список задач</h2>

    <ul>
        @foreach ($tasks as $task)
            <li>
                <a style=" color: white" href="{{ route('tasks.show', ['id' => $task['id']]) }}">
                    {{ $task['title'] }}
                </a>
                <p>{{ $task['description'] }}</p>
            </li>
        @endforeach
    </ul>
@endsection
