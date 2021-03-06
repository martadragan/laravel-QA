<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Question;
use App\Answer;

class QuestionController extends Controller
{
    public function index()
    {
        // $result_index = DB::table('qa')->orderBy('created_at', 'desc')->get();
        // dd($result_index);
        // return 'This is the list of questions';
        $question = Question::orderBy('title')->get();
        $answer = Answer::orderBy('text')->get();
        // dd($answer);
        // dd($question);
        $all_qa = Question::orderBy('title', 'desc')->get();
        $all_qa = Question::where('id', 1)->get();
        // dd($all_qa);
        $view = view('questions/index');
        return $view;

    }

    public function show($id)
    {
        // $result_show = DB::table('answers')->where('question_id', 1)->oldest()->get();
        // dd($result_show);
        // $test = DB::table('qa')->where('id', '=', 1)->first();
        // dd($test);

        $question = Question::findOrFail($id);
        $view = view('questions/show', compact('question'));
        return $view;

        // $answer = Answer::find(1);
        // $answer = Answer::
    }

}
