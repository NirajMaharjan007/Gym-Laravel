<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function test()
    {
        $arr = [1, 2, 3, 4, 5, 6, 7, 8];
        return view("home", compact("arr"));
    }
}