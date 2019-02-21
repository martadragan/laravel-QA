<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;
class DogController extends Controller
{
    public function index()
    {
        $dogs = Dog::all();

        // how to insert from hard coded by Elequent!!
        $dog = new Dog;
        $dog->name = 'Pysia';
        $dog->breed = 'Kundel';
        $dog->age = 5;
        $dog->save();



        // return $dogs;

        return view('dogs.index', ['dogs' => $dogs]);
        // compact
    }

    public function create()
    {
        return view('dogs.create');
    }

    public function store()
    {
        // return request()->all(); // JSON
        // all the data from the request, (form)
        $dog = new Dog();
        $dog->name = request('name');
        $dog->breed = request('breed');
        $dog->age = request('age');

        $dog->save();
        return redirect('/dogs');

    }
}
