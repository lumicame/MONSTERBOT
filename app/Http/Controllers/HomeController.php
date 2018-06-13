<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['teacher', 'admin','parent','student']);

if ($request->user()->hasRole('admin')) {
            
                return redirect()->route('admin.home');
}
else if($request->user()->hasRole('teacher'))
    {          
                return redirect()->route('teacher.home');
      }
 elseif ($request->user()->hasRole('parent')) {
            return redirect()->route('parent.home');
        }       
elseif ($request->user()->hasRole('student')) {
return redirect()->route('student.home');
}
        
    }


     public function ViewTeacherHome(Request $request)
    {
         $request->user()->authorizeRoles(['teacher']);
        $roles=Role::find(4);

        $students=$roles->users;
        return view('teacher.index',compact('students'));
    }

    public function ViewParentHome(Request $request)
    {
         $request->user()->authorizeRoles(['parent']);
        $roles=Role::find(4);

        $students=$roles->users;
        return view('parent.index',compact('students'));
    }

    public function ViewStudentHome(Request $request)
    {
         $request->user()->authorizeRoles(['student']);
        $roles=Role::find(4);

        $students=$roles->users;
        return view('student.index',compact('students'));
    }

}
