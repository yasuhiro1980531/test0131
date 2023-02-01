<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HomeworkRequest;
use App\Models\Contact;

class HomeworkController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create(HomeworkRequest $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email
        ]);
        
    }

    public function thanks()
    {
        return view('thanks');
    }
        
}
