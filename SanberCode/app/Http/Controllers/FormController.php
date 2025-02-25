<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

    public function register(){
        return view("pages/register");
    }
    public function welcome(Request $request)
{
    $request->validate([
        'first_name'  => 'required',
        'last_name'   => 'required',
        'gender'      => 'required',
        'nationality' => 'required',
        'languages'   => 'required|array',
        'bio'         => 'required',
    ]);

    return view("welcome", [
        'firstName'   => $request->input('first_name'),
        'lastName'    => $request->input('last_name'),
        'gender'      => $request->input('gender'),
        'nationality' => $request->input('nationality'),
        'languages'   => $request->input('languages'),
        'bio'         => $request->input('bio'),
    ]);
}

    
}
