<?php

namespace App\Http\Controllers;

use App\Persona;
use App\Equipo;
use App\Matricula;
use App\Competidorequipo;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$result = array();

        //$ce = Competidorequipo::all();
        $team = Equipo::all();
        foreach ($team as $t) {
            $tmp = array("equipo" => $t, "personas" => array());
            foreach(Competidorequipo::where("equipo_id", $t->id)->get() as $x) {
                $p = Persona::find(Matricula::find($x->matricula_id)->persona_id);
                array_push($tmp["personas"], $p);
            }
            array_push($result, $tmp);
        } 
        
        return response()->json(array("status" => true, "objects" => $result));*/
        $data = Persona::where("visible", true)->get();
        
        return response()->json(array("status" => true, "objects" => $data));
    }

    public function index_android()
    {
        //
        $data = Persona::all();
        
        return response()->json(array("status" => true, "objects" => $data));
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
        $codigo = $request->input("codigo");
        $nombrecompleto = $request->input("nombrecompleto");
        $dni = $request->input("dni");
        $fecha_nacimiento = $request->input("fecha_nacimiento");
        $telefono = $request->input("telefono");
        $foto = $request->input("foto");
        $user_id = $request->input("user_id");
        
   
        $persona_object = new Persona;
        $persona_object->codigo = $codigo;
        $persona_object->nombrecompleto = $nombrecompleto;
        $persona_object->dni = $dni;
        $persona_object->fecha_nacimiento = $fecha_nacimiento;
        $persona_object->telefono = $telefono;
        $persona_object->foto = $foto;
        $persona_object->user_id = $user_id;
        $persona_object->visible = true;
        $persona_object->save();
 
        return response()->json([
            "status" => true,
            "object" => $persona_object
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //$data = Persona::find($persona);
        
        return response()->json([
            "status" => true, 
            "object" => $persona
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        //
        $persona->codigo = $request->input("codigo");
        $persona->nombrecompleto = $request->input("nombrecompleto");
        $persona->dni = $request->input("dni");
        $persona->fecha_nacimiento = $request->input("fecha_nacimiento");
        $persona->telefono = $request->input("telefono");
        $persona->foto = $request->input("foto");
        $persona->user_id = $request->input("user_id");
        $persona->update();
        return response()->json(array("status" => true,
            "objects" => $persona));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        //
        $persona->visible = false;
        $persona->update();
    }
}
