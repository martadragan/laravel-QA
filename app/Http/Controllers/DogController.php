<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;
class DogController extends Controller
{
    public function index()
    {
        $dogs = Dog::all();

        // return $dogs;

        return view('dogs.index', ['dogs' => $dogs]);
        // compact
    }
}
