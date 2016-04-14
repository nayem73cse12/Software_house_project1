<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use Input;
use App\register;

class formController extends Controller
{
    public function show()
    {
        if(Auth::check())
        {
            return view('registrationForm');
        }
        else
            return redirect ('auth/login');

    }

    public function register()
    {
    	if(Auth::check())
        {
            $data=[

            'name'=>Input::get('name'),
            'dept'=>Input::get('dept'),
            'registration_no'=>Input::get('reg_no'),
            'comment'=>Input::get('comment'),

            ];

            $response=register::create($data);
            if($response)
            {
            	return view('questionForm');
            }


        }
        else
            return redirect ('auth/login');
    }
}
