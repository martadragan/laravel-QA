<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
// use App\Vote;


class AnswerController extends Controller
{
    public function index()
    {
        return view('questions.index');
    }

    public function show($id)
    {
        //11 .
        $answer = Answer::findOrFail($id);

        // dd($answer);
        return view('answers.show', [
            'answer' => $answer]);
    }

    public function Vote()
    {
        $request = request(); //get request object

        $answer = Answer::find(1); // find answer with id 1 in DB

        $vote = new \App\Vote; // make a new \App\Vote object
        $vote->answer_id = $answer->id; // assign value of id of Answer to the vote

        if ($request->input('up')) { // if there is up in $GET or $POST
            $vote->vote = 1; // assign value 1 to the column
            $answer->rating++; // increase by one (value), total rating
        } elseif($request->input('down')) { //else if request $GET $POST down
            $vote->vote = -1; // value increase by one
            $answer->rating--; // decrements total rating in the answer
        }

        $vote->save(); // insert the vote in to the db // becase creating a new \App\Vote
        $answer->save(); // update

        return back(); // redirect back to the previous
    }
}
