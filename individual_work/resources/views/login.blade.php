@extends('layouts.app')

@section('title', 'Вход')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label class="left" for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Введите свой email" required>
        <br>
        <label class="left" for="password">Пароль</label>
        <input type="password" id="password" name="password" placeholder="Введите пароль" required>
        <br>
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="{{ route('register') }}">зарегистрируйтесь</a>!
        </p>
    </form>
@endsection
