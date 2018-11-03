<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('index.welcome');
    }

    public function create()
    {
        return view('create.create');
    }

    public function question()
    {
        return view('question.question');
    }
}
