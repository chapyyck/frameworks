@extends('layouts.app')

@section('title', 'Создать новое задание')

@section('content')
    <div class="create-assignment-container">
        <header class="create-assignment-header">
            <h1>Создать новое задание</h1>
        </header>

        <form action="{{ route('assignments.store') }}" method="POST" class="create-assignment-form">
            @csrf

            <div class="form-group">
                <label for="description">Задание</label>
                <textarea name="description" id="description" class="form-control" placeholder="Что нужно сделать" required></textarea>
            </div>

            <div class="form-group">
                <label for="difficulty">Уровень сложности</label>
                <select name="difficulty" id="difficulty" class="form-control" required>
                    <option value="easy">Легкий</option>
                    <option value="medium">Средний</option>
                    <option value="hard">Тяжелый</option>
                </select>
            </div>

            <div class="form-group">
                <label for="subject_id">Предмет</label>
                <select name="subject_id" id="subject_id" class="form-control" required>
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Создать задание</button>
        </form>

        <div class="back-button-container">
            <form action="{{ route('admin') }}" method="GET" class="for-0-px">
                @csrf
                <button type="submit" class="btn btn-back">Назад</button>
            </form>
        </div>
    </div>
@endsection
