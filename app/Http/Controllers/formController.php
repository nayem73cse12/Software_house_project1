<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;

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
}
