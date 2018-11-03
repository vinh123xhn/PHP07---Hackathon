<?php

namespace App\Http\Controllers;

use App\Model\QuestionModel;
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
        return view('question.question', compact('numberInput'));
    }

    public function createQuestion(Request $request, $id)
    {
        for ($i = 1; $i <= $id; $i++) {
            $name = "name".$i;
            $question = new QuestionModel();
            $question->question = $request->$name;
            $question->save();
        }

        return redirect(route('showQuestion', $id));

    }

    public function showQuestion($id) {
        $array = [];
        $questions = QuestionModel::all();
        foreach ($questions as $key => $question) {
            $array[$key] = $question->question;
        }
        $countArray = count(array_rand($array, $id));

        for ($i = 0; $i <= $countArray; $i++) {
            echo $array[$i];
        }
    }
}
