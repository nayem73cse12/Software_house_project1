<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use Input;
use App\question;


class questionController extends Controller
{

	public function show()
	{
         if(Auth::check())
         {
         	$data=question::paginate(5);
         	return view('questionForm')->with('data',$data);
         }
         else
         {
         	return redirect('/auth/login');
         }
	}
    
}
