<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function thanks()
    {
        return view('thanks');
    }
}
