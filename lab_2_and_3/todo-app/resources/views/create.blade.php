@extends('layouts.app')

@section('title', 'Создание задачи')

@section('content')
    <h2>Создание задачи</h2>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <label for="title">Название:</label>
        <input type="text" name="title" id="title" required>

        <label for="description">Описание:</label>
        <textarea name="description" id="description" required></textarea>

        <label for="category_id">Категория:</label>
        <select name="category_id" id="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="tags">Теги:</label>
        <select name="tags[]" id="tags" multiple required>
            @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>

        <button type="submit">Сохранить</button>
    </form>
@endsection
