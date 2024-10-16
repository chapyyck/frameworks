@extends('layouts.app')

@section('title', 'Создание задачи')

@section('content')
    <h2>Редактирование задачи</h2>

    <p style="margin-bottom: 65px">Здесь логика редактирования задачи</p>

    <a style="color: #f8f6f2;" href="{{ route('tasks.index') }}">Назад к списку задач</a>
@endsection
