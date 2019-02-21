<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QuestionController extends Controller
{
    public function index()
    {
        $result_index = DB::table('qa')->orderBy('created_at', 'desc')->get();
        dd($result_index);
        return 'This is the list of questions';
    }

    public function show() 
    {
        $result_show = DB::table('answers')->where('question_id', 1)->oldest()->get();
        dd($result_show);
        $test = DB::table('qa')->where('id', '=', 1)->first();
        dd($test);
        return 'This is a detail of a question';
    }

}
