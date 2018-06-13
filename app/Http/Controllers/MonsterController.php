<?php

namespace App\Http\Controllers;

use App\Monster;
use App\User;
use Illuminate\Http\Request;

class MonsterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
         $monsters = Monster::all();

        return view('admin.monster.index', compact('monsters'));    
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
        $monster = new Monster();
        $monster->nit=$request->nit;
            $monster->name = $request->name;
            if($request->description){
                            $monster->description = $request->description;

                        }else{
                            $monster->description = " ";
                        }
            $monster->accion="desactivado";
            $monster->save();
            return response()->json($monster);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $monster=Monster::where("user_id","=",$id)->get()->first();       
           return response()->json($monster);
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
            $monster = Monster::findOrFail($id);
            $monster->name = $request->name;
            $monster->description = $request->description;
            $monster->save();
            return response()->json($monster);
    }

    public function UpdateAccion(Request $request, $id)
    {
        $user=User::findOrFail($request->user);
        if($id==='0'){
            $monster=$user->monster()->first();
            $monster->accion="desactivado";
            $monster->save();
                $user->monster()->detach();
                return $monster->name." desactivado";
                      }
            else{
                $monster = Monster::findOrFail($id);
             $user->monster()->detach();
            $monster->user()->detach();
            $monster->accion= $request->accion;
            $monster->save();
           $monster->user()->attach($user);
            return $monster->name.' asignado correctamente al alumno '.$user->name;
                
            }
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $monster = Monster::findOrFail($id);
        $monster->delete();

        return response()->json($monster);
    }
}
