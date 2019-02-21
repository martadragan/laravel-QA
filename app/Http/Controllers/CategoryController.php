<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = DB::select('select * from users where id = :id', ['id' => 1]);
        $categories =  DB::table('categories')->orderBy('name')->get();
        $view = view('categories.index', [
            'categories' => $categories
        ]);
       

        
    }
}

