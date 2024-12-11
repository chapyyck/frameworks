<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Определяем, по какому параметру будем сортировать (по сложности)
        $sortOrder = $request->get('difficulty', 'asc');

        $assignments = Assignment::with('subject')
            ->orderBy('difficulty', $sortOrder)
            ->get();

        return view('home', compact('assignments'));
    }
}
