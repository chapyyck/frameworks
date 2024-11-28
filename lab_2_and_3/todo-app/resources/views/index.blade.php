@extends('layouts.app')

@section('title', 'Список задач')

@section('content')
    <h2>Список задач</h2>

    <ul>
        @foreach ($tasks as $task)
            <li>
                <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a>
                <span class="category">Категория: {{ $task->category->name }}</span>
                <span class="category">Описание категории: {{ $task->category->description }}</span>
            </li>
        @endforeach
    </ul>
@endsection
