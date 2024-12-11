@extends('layouts.app')

@section('title', 'Админ-панель')

@section('content')
    <div class="admin-container">
        <header class="admin-header">
            <h1>Панель администратора</h1>
        </header>

        <div class="user-list-container">
            <h2>Список пользователей</h2>
            <ul class="user-list">
                @foreach($users as $user)
                    <li class="user-item">{{ $user->name }} - {{ $user->email }} - Роль: {{ $user->readable_role }}</li>
                @endforeach
            </ul>
        </div>

        <div class="admin-actions">
            <a href="{{ route('assignments.create') }}" class="btn btn-success">Создать новое задание</a>

            <div class="admin-logout">
                <form action="{{ route('logout') }}" method="POST" class="logout-form">
                    @csrf
                    <button type="submit" class="btn btn-logout">Выйти из аккаунта</button>
                </form>
            </div>

            <div class="admin-back">
                <form action="{{ route('home') }}" method="GET" class="back-form">
                    @csrf
                    <button type="submit" class="btn btn-back">Назад</button>
                </form>
            </div>
        </div>
    </div>
@endsection
