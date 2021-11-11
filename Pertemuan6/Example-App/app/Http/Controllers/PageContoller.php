<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageContoller extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function display()
    {
        $a = "Hello";
        $b = "World";
        return view('display',compact('a','b'),["name" => "Michael"]);
    }

    public function if()
    {
        return view('if');
    }

    public function ifelse()
    {
        return view('ifelse');
    }

    public function switch()
    {
        return view('switch');
    }
    
    public function for()
    {
        return view('for');
    }

    public function foreach()
    {
        return view('foreach');
    }

    public function forelse()
    {
        return view('forelse');
    }

    public function while()
    {
        return view('while');
    }

    public function continuebreak()
    {
        return view('continuebreak');
    }
}
