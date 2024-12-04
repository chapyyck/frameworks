<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
<form action="{{ route('register') }}" method="POST">
    @csrf
    <label for="name">Имя</label>
    <input style="width: 100%" type="text" id="name" name="name" placeholder="Введите свое имя" required>
    <br>
    <label for="email">Email</label>
    <input style="width: 100%" type="email" id="email" name="email" placeholder="Введите свой email" required>
    <br>
    <label for="password">Пароль</label>
    <input style="width: 100%" type="password" id="password" name="password" placeholder="Введите свой пароль" required>
    <br>
    <label for="password_confirmation">Подтверждение пароля</label>
    <input style="width: 100%" type="password" id="password_confirmation" name="password_confirmation" placeholder="Повторите свой пароль" required>
    <br>
    <button style="width: 100%" type="submit">Зарегистрироваться</button>
    <p>
        Есть аккаунт? - <a href="{{ route('login') }}">войдите</a>!
    </p>
</form>
</body>
</html>
