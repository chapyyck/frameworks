@props(['id', 'title', 'description', 'created_at', 'updated_at', 'status', 'priority', 'assignment'])

<div class="task">
    <h2>{{ $title }}</h2>
    <p><strong>Исполнитель:</strong> {{ $assignment }}</p>
    <p><strong>Описание:</strong> {{ $description }}</p>
    <p><strong>Статус:</strong> {{ $status ? 'Выполнена' : 'Не выполнена' }}</p>
    <p><strong>Приоритет:</strong> {{ ucfirst($priority) }}</p>
    <p><strong>Дата создания:</strong> {{ $created_at }}</p>
    <p><strong>Последнее обновление:</strong> {{ $updated_at }}</p>

    <div class="actions" style="display: flex; gap: 10px;">
        <a href="{{ route('tasks.edit', $id) }}"
           style="color: #09cd00; text-decoration: none;">
            Редактировать
        </a>

        <form action="{{ route('tasks.destroy', $id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit"
                    onclick="return confirm('Вы уверены, что хотите удалить эту задачу?');"
                    style="color: red; font-size: medium; background: none; border: none; cursor: pointer;">
                Удалить
            </button>
        </form>
    </div>

</div>
