<header>
    <h1><a style="color: #f8f6f2; text-decoration: none" href="{{ route('start') }}">To-Do приложение</a></h1>
    <nav class="nav">
        <div class="nav-item">
            <a href="{{ route('tasks.index') }}">Список задач</a>
        </div>
        <div class="nav-item">
            <a href="{{ route('about') }}">О нас</a>
        </div>
        <div class="nav-item">
            <a href="{{ route('tasks.create') }}">Создать задачу</a>
        </div>
    </nav>
</header>
