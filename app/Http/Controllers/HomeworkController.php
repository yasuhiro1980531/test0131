<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HomeworkRequest;
use App\Models\Homework;

class HomeworkController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function thanks(HomeworkRequest $request)
    {
        $contact = new Homework();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->save();
        return redirect('/thanks');
    }
}
