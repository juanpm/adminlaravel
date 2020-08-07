<?php

namespace App\Http\Controllers;

use App\Equipo;
use App\Disciplina;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$result = array();
        $data = Equipo::where("visible", true)->get();
        $compilado = array();
        foreach($data as $item) {
            $xrow = array(
                "id" => $item->id,
                "nombre" => $item->nombre,
                "disciplina" => Disciplina::find($item->disciplina_id),
                "descripcion" => $item->descripcion,
                "image" => $item->image
            );
            array_push($compilado, $xrow);
        }
        
        return response()->json(array("status" => true, "objects" => $compilado));
    }

     public function indexByDisciplina(Request $request, $disciplina)
    {
        //
        //$result = array();
        $data = Equipo::where([["visible","=", true],["disciplina_id", $disciplina]])->get();
        $compilado = array();
        foreach($data as $item) {
            $xrow = array(
                "id" => $item->id,
                "nombre" => $item->nombre,
                "disciplina" => Disciplina::find($item->disciplina_id),
                "descripcion" => $item->descripcion,
                "image" => $item->image
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
        //Log::channel('stderr')->info('test 1');

        //Aqui se capturan datos
        $nombre = $request->input("nombre");
        $disciplina_id = $request->input("disciplina_id");
        $descripcion = $request->input("descripcion");
        $image = $request->input("image");
        //Se crea el objeto para la base de datos
        //Log::channel('stderr')->info('test 2');

        $equipo_object = new Equipo;
        $equipo_object->nombre = $nombre;
        $equipo_object->disciplina_id = $disciplina_id;
        $equipo_object->descripcion = $descripcion;
        $equipo_object->image = $image;
        $equipo_object->visible = true;
        //Se guarda en la base de datos
        $equipo_object->save();
        //Log::channel('stderr')->info('test 3');

        //Se responde
        return response()->json([
            "status" => true,
            "object" => $equipo_object
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show(Equipo $equipo)
    {
         //$data = Equipo::find($equipo);
        
        $disciplina = Disciplina::find($equipo->disciplina_id);
        $nombre = $equipo->nombre;
        $descripcion = $equipo->descripcion;
        $image = $equipo->image;
        $result = array("nombre" => $nombre, 
            "descripcion" => $descripcion,
            "image" => $image,
            "disciplina" => $disciplina, 
            "equipo" => $equipo);

        return response()->json([
            "status" => true, 
            "object" => $result
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $equipo)
    {
        //
        $equipo->nombre = $request->input("nombre");
          $equipo->disciplina_id = $request->input("disciplina_id");
          $equipo->descripcion = $request->input("descripcion");
          $equipo->image = $request->input("image");
          //$competidorequipo->visible = $request->true;
          $equipo->update();
          return response()->json(array("status" => true,
          "object" =>$equipo));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        //
        $equipo->visible = false;
        $equipo->update();
    }
}
