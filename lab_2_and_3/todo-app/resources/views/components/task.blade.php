@props(['id', 'title', 'description', 'created_at', 'updated_at', 'category', 'category_description', 'tags'])

<div class="task-details">
    <h2 class="task-title">{{ $title }}</h2>

    <div class="task-info">
        <p><span>Категория:</span> {{ $category }}</p>
        <p><span>Описание категории:</span> {{ $category_description }}</p>
        <p><span>Описание таска:</span> {{ $description }}</p>
        <p><span>Теги:</span> {{ $tags }}</p>
        <p><span>Дата создания:</span> {{ $created_at }}</p>
        <p><span>Последнее обновление:</span> {{ $updated_at }}</p>
    </div>

    <div class="task-actions">
        <form action="{{ route('tasks.edit', $id) }}" method="GET" class="edit-form">
            <button type="submit" class="edit-btn">Редактировать</button>
        </form>

        <form action="{{ route('tasks.destroy', $id) }}" method="POST" class="delete-form">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-btn" onclick="return confirm('Вы уверены, что хотите удалить эту задачу?');">
                Удалить
            </button>
        </form>
    </div>

</div>
