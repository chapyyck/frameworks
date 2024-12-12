<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Subject;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        $assignments = Assignment::all();
        return view('index', compact('assignments'));
    }

    public function create()
    {
        if (auth()->user()->role != 'admin') {
            abort(403);
        }
        $subjects = Subject::all(); // Получаем все предметы
        return view('create', compact('subjects'));
    }

    public function store(Request $request)
    {
        // Валидация данных
        $request->validate([
            'description' => 'required|string|max:100',
            'difficulty' => 'required|in:easy,medium,hard',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        // Создание нового задания
        Assignment::create([
            'description' => $request->description,
            'difficulty' => $request->difficulty,
            'subject_id' => $request->subject_id,
            'teacher_id' => auth()->id(),
        ]);

        return redirect()->route('admin');
    }

    public function edit($id)
    {
        $assignment = Assignment::findOrFail($id);
        $subjects = Subject::all();

        return view('edit', compact('assignment', 'subjects'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|string',
            'difficulty' => 'required|in:easy,medium,hard',
        ]);

        $assignment = Assignment::findOrFail($id);
        $assignment->update([
            'description' => $request->description,
            'difficulty' => $request->difficulty,
        ]);

        return redirect()->route('home');
    }

    public function destroy(Assignment $assignment)
    {
        // Только преподаватели могут удалять свои задания
        if ($assignment->teacher_id != auth()->id()) {
            abort(403);
        }

        $assignment->delete();
        return redirect()->route('home');
    }
}
