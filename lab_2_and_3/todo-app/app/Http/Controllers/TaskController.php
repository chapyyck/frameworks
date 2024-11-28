<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with(['category'])->get();

        // Отображаем представление, передавая задачи
        return view('index', compact('tasks'));
    }

    public function show($id)
    {
        $task = Task::with(['category', 'tags'])->findOrFail($id);

        return view('show', compact('task'));
    }


    public function create()
    {
        $categories = Category::all();  // Получаем все категории
        $tags = Tag::all();  // Получаем все теги

        return view('create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $task = Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
        ]);

        // Привязываем теги к задаче
        $task->tags()->sync($request->input('tags'));

        return redirect()->route('tasks.index');
    }


    public function edit($id)
    {
        $task = Task::with(['category', 'tags'])->findOrFail($id);
        $categories = Category::all();
        $tags = Tag::all();

        return view('edit', compact('task', 'categories', 'tags'));
    }


    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
        ]);

        $task->tags()->sync($request->input('tags'));

        return redirect()->route('tasks.index');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index');
    }
}
