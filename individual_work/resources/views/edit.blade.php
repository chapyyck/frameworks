@extends('layouts.app')

@section('title', 'Редактировать задание')

@section('content')
    <div class="edit-assignment-container">
        <header class="edit-assignment-header">
            <h1>Редактировать задание</h1>
        </header>

        <div class="assignment-details">
            <p><strong>Предмет:</strong> {{ $assignment->subject->name }}</p>
        </div>

        <form action="{{ route('assignments.update', $assignment->id) }}" method="POST" class="edit-assignment-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="description" class="form-label">Описание задания</label>
                <textarea name="description" id="description" class="form-control" required>{{ $assignment->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="difficulty" class="form-label">Сложность</label>
                <select name="difficulty" id="difficulty" class="form-control" required>
                    <option value="easy" {{ $assignment->difficulty == 'easy' ? 'selected' : '' }}>Легкий</option>
                    <option value="medium" {{ $assignment->difficulty == 'medium' ? 'selected' : '' }}>Средний</option>
                    <option value="hard" {{ $assignment->difficulty == 'hard' ? 'selected' : '' }}>Сложный</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
        </form>

        <div class="back-button-container">
            <form action="{{ route('home') }}" method="GET" class="for-0-px">
                @csrf
                <button type="submit" class="btn btn-back">Назад</button>
            </form>
        </div>
    </div>
@endsection
