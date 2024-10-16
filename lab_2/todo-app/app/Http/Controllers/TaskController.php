<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = [
            ['id' => 1, 'title' => 'Сдать аттестации', 'description' => 'Фреймворки, 2D-графика, Wolfram'],
            ['id' => 2, 'title' => 'Забрать посылки', 'description' => 'Почта Молдовы, Новапошта, DHL'],
            ['id' => 3, 'title' => 'Уборка квартиры', 'description' => 'Пропылесосить, вымыть полы, вытереть пыль'],
        ];

        return view('index', ['tasks' => $tasks]);
    }

    public function show($id)
    {
        $task = [
            'id' => $id,
            'title' => 'Задача номер ' . $id,
            'assignment' => ['Роман', 'Антон', 'Евгений'][rand(0, 2)],
            'description' => ['Кайфуй брат =)', 'Это будет нелегко..', 'Легкотня!'][rand(0, 2)],
            'status' => $id % 2 == 0,
            'priority' => ['Низкий', 'Средний', 'Высокий'][rand(0, 2)],
            'created_at' => '2024-10-16',
            'updated_at' => now(),
        ];

        return view('show', ['task' => $task]);
    }


    public function create()
    {
        return view('create');
    }

    public function store()
    {

    }

    public function edit($id)
    {
        $tasks = [
            ['id' => 1, 'title' => 'Сдать аттестации', 'description' => 'Фреймворки, 2D-графика, Wolfram'],
            ['id' => 2, 'title' => 'Забрать посылки', 'description' => 'Почта Молдовы, Новапошта, DHL'],
            ['id' => 3, 'title' => 'Уборка квартиры', 'description' => 'Пропылесосить, вымыть полы, вытереть пыль'],
        ];

        // Найти задачу по ID
        $task = collect($tasks)->firstWhere('id', $id);

        return view('edit', ['task' => $task]);
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}
