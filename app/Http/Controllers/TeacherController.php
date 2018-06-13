<?php

namespace App\Http\Controllers;

use App\Role;
use App\Action;
use App\Shedule;
use App\Classroom;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['teacher']);
        $user=User::FindorFail(Auth::user()->id);

        $shedules=$user->shedules;
       
        return view('teacher.index',compact('shedules'));
    }

    public function ClassRoom($id)
    {
    	$shedule=Shedule::FindorFail($id);
    	$users=$shedule->classroom()->first()->users;
    	$title=$shedule->subject()->first()->name."   ".$shedule->classroom()->first()->name." -- ".$shedule->classroom()->first()->description;
    	return view('teacher.classroom.index',compact('users','title'));

    }
}
