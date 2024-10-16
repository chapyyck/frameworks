<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Метод для главной страницы
    public function index()
    {
        return view('home');  // Возвращает представление home.blade.php
    }

    // Метод для страницы "О нас"
    public function about()
    {
        return view('about');  // Возвращает представление about.blade.php
    }
}
