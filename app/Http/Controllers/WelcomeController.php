<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('welcome',[
            'categories' => $categories,
        ]);
    }
}
