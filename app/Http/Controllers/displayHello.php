<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class displayHello extends Controller
{

    /*

    // using view

    public function helloMsg(){
        return view ("hello");
    }
    */

    // Direct return
    public function helloMsg(){
        return "<h1>Hello, Laravel!</h1>";
    }
}
