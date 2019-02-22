<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;
class DogController extends Controller
{
    public function index()
    {
        $dogs = Dog::all();

        // how to insert  hard coded by Elequent!!
        // $dog = new Dog;
        // $dog->name = 'Pysia';
        // $dog->breed = 'Kundel';
        // $dog->age = 5;
        // $dog->save();
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

    public function edit($id)
    {
        $dog = Dog::findOrFail($id);
        return view('dogs.edit', compact('dog'));
    }

    public function update($id)
    {
        $dog = Dog::findOrFail($id);

        $dog->name = request('name');
        $dog->breed = request('breed');
        $dog->age = request('age');

        $dog->save();

        return redirect('/dogs');
        // dd(request()->all());
    }

    public function destroy($id)
    {
        // Dog::find($id)->delete();
        Dog::findOrFail($id)->delete();

        return redirect('/dogs');
    }
}
