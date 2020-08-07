<?php

namespace App\Http\Controllers;

use App\Competidorequipo;
use App\Matricula;
use App\Equipo;
use App\Persona;
use Illuminate\Http\Request;

class CompetidorequipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Competidorequipo::where("visible", true)->get();
        $compilado = array();
        foreach($data as $item) {
            $m = Matricula::find($item->matricula_id);
            $xrow = array(
                "id" => $item->id,
                "matricula" => $m,
                "persona" => Persona::find($m->persona_id),
                "equipo" => Equipo::find($item->equipo_id)
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
        $matricula_id = $request->input("matricula_id");
        $equipo_id = $request->input("equipo_id");
   
        $competidorequipo_object = new Competidorequipo;
        $competidorequipo_object->matricula_id = $matricula_id;
        $competidorequipo_object->equipo_id = $equipo_id;
        $competidorequipo_object->visible = true;
        $competidorequipo_object->save();
 
        return response()->json([
            "status" => true,
            "object" => $competidorequipo_object
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Competidorequipo  $competidorequipo
     * @return \Illuminate\Http\Response
     */
    public function show(Competidorequipo $competidorequipo)
    {
       //$equipo_id = Equipo::find($id);
        //$data = Competidorequipo::all();

        $matricula = Matricula::find($competidorequipo->matricula_id);
        $equipo = Equipo::find($competidorequipo->equipo_id);
        $result = array("matricula" => $matricula, 
            "equipo" => $equipo,
            "competidorequipo" => $competidorequipo);

        return response()->json([
            "status" => true, 
            "object" => $result
        ]);
    }

    /*public function show(Competidorequipo $competidorequipo)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Competidorequipo  $competidorequipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Competidorequipo $competidorequipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Competidorequipo  $competidorequipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competidorequipo $competidorequipo)
    {
        //
        $competidorequipo->matricula_id = $request->input("matricula_id");
        //$matricula->persona_id = $request->input("persona_id");
        $competidorequipo->equipo_id = $request->input("equipo_id");
        //$competidorequipo->visible = $request->true;
        $competidorequipo->update();
        return response()->json(array("status" => true,
        "object" =>$competidorequipo));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Competidorequipo  $competidorequipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competidorequipo $competidorequipo)
    {
        $competidorequipo->visible = false;
        $competidorequipo->update();
    }
}
