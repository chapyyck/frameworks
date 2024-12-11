@extends('layouts.app')

@section('title', 'Домашняя страница')

@section('content')
    <div class="home-container">
        <header class="home-header">
            <h1>Добро пожаловать, {{ Auth::user()->name }}!</h1>
            <p>Вы в системе как {{ Auth::user()->readable_role }}</p>

            @if(Auth::user()->isAdmin())
                <p><a href="{{ route('admin') }}" class="admin-link">Перейти в панель преподавателя</a></p>
            @endif
        </header>

        <div class="assignments-container">
            <h2 class="assignments-title">Список заданий</h2>

            <form action="{{ route('home') }}" method="GET" class="sort-form">
                <label for="difficulty">Сортировать по сложности:</label>
                <select name="difficulty" id="difficulty" onchange="this.form.submit()">
                    <option value="asc" {{ request('difficulty') == 'asc' ? 'selected' : '' }}>От лёгких</option>
                    <option value="desc" {{ request('difficulty') == 'desc' ? 'selected' : '' }}>От сложных</option>
                </select>
            </form>

            @foreach ($assignments as $assignment)
                <div class="assignment-card">
                    <p><strong>{{ $assignment->subject->name ?? 'Не указан' }}</strong></p>
                    <p><strong>Сложность:</strong> {{ $assignment->readable_difficulty }}</p>
                    <p>{{ $assignment->description }}</p>

                    @if (auth()->check() && auth()->user()->role == 'admin' && $assignment->teacher_id == auth()->id())
                        <a href="{{ route('assignments.edit', $assignment->id) }}" class="btn btn-primary">Редактировать</a>
                        <form action="{{ route('assignments.destroy', $assignment->id) }}" method="POST" class="inline-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    @endif
                </div>
            @endforeach
        </div>

        <form action="{{ route('logout') }}" method="POST" class="logout-form">
            @csrf
            <button type="submit" class="btn btn-logout">Выйти</button>
        </form>
    </div>
@endsection
