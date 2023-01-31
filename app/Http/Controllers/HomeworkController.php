<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HomeworkRequest;

class HomeworkController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function thanks(HomeworkRequest $request)
    {
        $forms = $request->all();
        return view('thanks',['forms' => $forms]);
    }
}
