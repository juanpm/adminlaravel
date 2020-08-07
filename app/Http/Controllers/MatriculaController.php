<?php

namespace App\Http\Controllers;

use App\Matricula;
use App\Persona;
use App\Seccionperiodo;
use App\Carrera;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Matricula::where("visible", true)->get();
        $compilado = array();
        foreach($data as $item) {
            $xrow = array(
                "id" => $item->id,
                "persona" => Persona::find($item->persona_id),
                "carrera" => Carrera::find($item->carrera_id),
                "seccionperiodo" => Seccionperiodo::find($item->seccionperiodo_id)
            );
            array_push($compilado, $xrow);
        }
        
        return response()->json(array("status" => true, "objects" => $compilado));
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
        $carrera_id = $request->input("carrera_id");
        $persona_id = $request->input("persona_id");
        $seccionperiodo_id = $request->input("seccionperiodo_id");
   
        $matricula_object = new Matricula;
        $matricula_object->carrera_id = $carrera_id;
        $matricula_object->persona_id = $persona_id;
        $matricula_object->seccionperiodo_id = $seccionperiodo_id;
        $matricula_object->visible = true;
        $matricula_object->save();
 
        return response()->json([
            "status" => true,
            "object" => $matricula_object
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function show(Matricula $matricula)
    {
        //
        $persona = Persona::find($matricula->persona_id);
        $carrera = Carrera::find($matricula->carrera_id);
        $seccion = Seccionperiodo::find($matricula->seccionperiodo_id);
        $result = array("carrera" => $carrera, 
            "seccion" => $seccion,
            "persona" => $persona, 
            "matricula" => $matricula);

        return response()->json([
            "status" => true, 
            "object" => $result
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function edit(Matricula $matricula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matricula $matricula)
    {
        //
        $matricula->carrera_id = $request->input("carrera_id");
        //$matricula->persona_id = $request->input("persona_id");
        $matricula->seccionperiodo_id = $request->input("seccionperiodo_id");
        //$matricula->visible = $request->true;
        $matricula->update();
        return response()->json(array("status" => true,
        "object" =>$matricula));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matricula $matricula)
    {
        //
        $matricula->visible = false;
        $matricula->update();
    }
}
