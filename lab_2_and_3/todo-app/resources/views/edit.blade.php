@extends('layouts.app')

@section('title', 'Создание задачи')

@section('content')
    <h2>Редактирование задачи</h2>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Название:</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}" required>
        <br>

        <label for="description">Описание:</label>
        <textarea name="description" id="description" required>{{ $task->description }}</textarea>
        <br>

        <label for="category_id">Категория:</label>
        <select name="category_id" id="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $task->category_id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <br>

        <label for="tags">Теги:</label>
        <select name="tags[]" id="tags" multiple>
            @foreach ($tags as $tag)
                <option value="{{ $tag->id }}" {{ $task->tags->contains($tag->id) ? 'selected' : '' }}>
                    {{ $tag->name }}
                </option>
            @endforeach
        </select>
        <br>

        <button type="submit">Сохранить</button>
    </form>

    <a style="color: #f8f6f2;" href="{{ route('tasks.index') }}">Назад к списку задач</a>
@endsection
