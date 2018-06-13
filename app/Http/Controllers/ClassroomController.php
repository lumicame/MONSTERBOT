<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {$request->user()->authorizeRoles(['admin']);
         $class = Classroom::all();

        return view('admin.classroom.index', ['classroom' => $class]);
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
            $class = new Classroom();
            $class->name = $request->name;
            $class->description = $request->description;
            $class->save();
            return response()->json($class);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $class = Classroom::findOrFail($id);

        return view('admin.classroom.show', ['classroom' => $class]);
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
         $class = Classroom::findOrFail($id);
            $class->name = $request->name;
            $class->description = $request->description;
            $class->save();
            return response()->json($class);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class = Classroom::findOrFail($id);
        $class->delete();

        return response()->json($class);
    }
}
