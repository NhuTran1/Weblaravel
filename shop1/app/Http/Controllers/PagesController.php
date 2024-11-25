<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = "Hello word";
        $x = 10;
        $y = 20;
       return view('animal\dog', compact('title', 'x', 'y'));
    }

    public function about() {
        $name = "Nhuw";
        return view('animal\about-animal', compact('name' ));
    }

    
}
