<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Classroom;
use App\Subject;
use App\Date;
use App\Shedule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $request->user()->authorizeRoles(['admin']);
        
        return view('admin.index');
    }

//Vistas para agregar a los estudiantes
    public function StudentIndex(Request $request)
    {

        $request->user()->authorizeRoles(['admin']);
        $roles=Role::find(4);
        $students=$roles->users;
        return view('admin.student.index', compact('students')); 
    }
    
    public function StoreStudent(Request $request)
    {

        $request->user()->authorizeRoles(['admin']);
        $class=Classroom::where('id',$request->class)->first();
        $role_teacher=Role::where('name','student')->first();
        $user=new User();
        $user->name=$request->name;
        $user->nit=$request->nit;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        $user->roles()->attach($role_teacher);
        $user->classroom()->attach($class);
        $user->class=$user->classroom->first()->name." - ".$user->classroom->first()->description;
        $user->classid=$user->classroom->first()->id;
        $user->classcount=$user->classroom->first()->users->count();
        $roles=Role::find(4);
        $user->studentcount=$roles->users->count();
        return response()->json($user); 
    }
//Vistas para agregar a los profesores
    public function TeacherIndex(Request $request)
    {

        $request->user()->authorizeRoles(['admin']);
        $roles=Role::find(2);
        $teachers=$roles->users;
        return view('admin.teacher.index', compact('teachers'));  
    }

    public function StoreTeacher(Request $request)
    {

        $request->user()->authorizeRoles(['admin']);
        $role_teacher=Role::where('name','teacher')->first();
        $user=new User();
        $user->name=$request->name;
        $user->nit=$request->nit;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        $user->roles()->attach($role_teacher);
        $roles=Role::find(2);
        $user->teachercount=$roles->users->count();
        return response()->json($user); 
    }    
//Vistas para editar y eliminar tanto a los estudiantes como a los profesores
    public function UpdateUser(Request $request,$id)
    {

         $user=User::FindOrFail($id);
         $user->name=$request->name;
         $user->nit=$request->nit;
         $user->email=$request->email;
         $user->save();
         if ($user->classroom()) 
            {
            $user->class=$user->classroom->first()->name." - ".$user->classroom->first()->description;
            $user->classid=$user->classroom->first()->id;
            $user->classcount=$user->classroom->first()->users->count();
            }
         return response()->json($user);
    }

    public function DestroyUser($id)
    {
        $user=User::FindOrFail($id);
        $role_user=DB::table('role_user')->where('user_id','=',$id)->delete();
        $classroom_user=DB::table('classroom_user')->where('user_id','=',$id)->delete();
        $user->delete();
        return response()->json($user);   
    }

//vistas para ver los cursos y a sus alumnos
    public function CourseIndex(Request $request)
        {
            $request->user()->authorizeRoles(['admin']);
            $classrooms=Classroom::all();
            return view('admin.courses.index', compact('classrooms')); 
        }    

    public function AssingCourseIndex(Request $request)
    {
            $request->user()->authorizeRoles(['admin']);
            $classrooms=Classroom::all();
            $subjects=Subject::all();
            return view('admin.assingcourses.index', compact('classrooms')); 
    }
    public function AssingCourseStore(Request $request)
    {
        $classroom=Classroom::find($request->classroom_id);
        $subject=Subject::find($request->subject_id);
        $user=User::find($request->user_id);
        $date1=new Date();
        $date1->inicio =$request->inicio.''.$request->inicio_time;
        $date1->fin=$request->fin.''.$request->fin_time;
        $date1->dia=$request->day;
        $date1->save();
        $shedule = new Shedule();
        $shedule->nit=str_random(10);   
        $shedule->save();
        $classroom->shedules()->attach($shedule);
        $shedule->user()->attach($user);
        $shedule->subject()->attach($subject);
        $shedule->dates()->attach($date1);
        $shedule->classid=$classroom->id;
        $shedule->name_subject=$subject->name;
        $shedule->name_profesor=$user->name;
        $shedule->fecha=$date1->dia." ".$date1->inicio." - ".$date1->fin;
        return response()->json($shedule); 

    }
    public function AssingCourseUpdate(Request $request,$id)
    {
        $shedule = Shedule::FindOrFail($id);
        $date1=new Date();
        $date1->inicio =$request->inicio.''.$request->inicio_time;
        $date1->fin=$request->fin.''.$request->fin_time;
        $date1->dia=$request->day;
        $date1->save();
        $shedule->dates()->attach($date1);
        $shedule->fecha=$date1->dia." ".$date1->inicio." - ".$date1->fin;
        return response()->json($shedule); 

    }
    public function AssingCourseDelete(Request $request,$id)
    {
        $shedule = Shedule::FindOrFail($id);
        foreach ($shedule->dates as $date) {
            $date->delete();
        }
        $shedule->delete();
        return response()->json($shedule); 

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
