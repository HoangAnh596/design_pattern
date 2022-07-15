<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Event;

class HomeController extends Controller
{
    public function abc()
    {
        app()->bind('computer', 'Computer');
        $computer = app('computer');
        // $computer = app('Computer');
        dd($computer);
        return view('home');
    }
}
