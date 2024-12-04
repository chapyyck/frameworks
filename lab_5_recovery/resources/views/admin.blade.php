<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора</title>
    <link rel="stylesheet" href="{{ asset('../css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding-top: 60px;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        h2 {
            color: #34495e;
            margin-bottom: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            width: 80%;
            max-width: 600px;
        }

        li {
            background-color: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        li:hover {
            background-color: #ecf0f1;
        }

        button {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        button:hover {
            background-color: #c0392b;
        }

        form {
            margin-top: 30px;
        }
    </style>
</head>
<body>
<h1>Панель администратора</h1>

<h2>Список пользователей</h2>
<ul>
    @foreach($users as $user)
        <li>{{ $user->name }} - {{ $user->email }} - Роль: {{ $user->role }}</li>
    @endforeach
</ul>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Выйти</button>
</form>
</body>
</html>
