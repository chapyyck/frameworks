<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Домашняя страница</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-top: 60px;
        }
        h1 {
            color: #2c3e50;
        }
        p {
            margin: 10px 0;
        }
        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        button {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #c0392b;
        }
        form {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h1>Добро пожаловать, {{ Auth::user()->name }}!</h1>
<p>Роль: {{ Auth::user()->role }}</p>

@if(Auth::user()->isAdmin())
    <p><a href="{{ route('admin') }}">Перейти в панель администратора</a></p>
@endif

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Выйти</button>
</form>


</body>
</html>
