<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class StudentController extends Controller
{
	 public function index(Request $request)
    {
         $request->user()->authorizeRoles(['student']);
        $user=User::FindorFail(Auth::user()->id);

        $shedules=$user->classroom()->first()->shedules;
        return view('student.index',compact('shedules'));
    }

    public function profile(Request $request)
    {
    	$request->user()->authorizeRoles(['student']);
        $user=User::FindorFail(Auth::user()->id);
		return view('student.profile.index',compact('user'));        

    }
}
