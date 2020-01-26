<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Test(){
        $a = "Pass{date}word{time}";
        return view('test', compact("a"));
    }
}
