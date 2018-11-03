<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        return view('question');
    }

    public function showInput()
    {
        $numberInput = $_GET['number'];
        return view('showInput', compact('numberInput'));
    }

    public function createQuestion(Request $request, $id)
    {
        for ($i = 1; $i <= $id; $i++) {
            echo ($request->name$i);
        }

    }
}
