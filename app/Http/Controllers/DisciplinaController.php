<?php

namespace App\Http\Controllers;

use App\Disciplina;
use App\Olimpiada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Disciplina::where("visible", true)->get();
        $compilado = array();
        foreach($data as $item) {
            $xrow = array(
                "id" => $item->id,
                "nombre" => $item->nombre,
                "participantes" => $item->participantes,
                "olimpiada" => Olimpiada::find($item->olimpiada_id),
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
        $participantes = $request->input("participantes");
        $olimpiada_id = $request->input("olimpiada_id");
        //Se crea el objeto para la base de datos
        //Log::channel('stderr')->info('test 2');

        $disciplina_object = new Disciplina;
        $disciplina_object->nombre = $nombre;
        $disciplina_object->participantes = $participantes;
        $disciplina_object->olimpiada_id = $olimpiada_id;
        $disciplina_object->visible = true;
        //Se guarda en la base de datos
        $disciplina_object->save();
        Log::channel('stderr')->info('test 3');

        //Se responde
        return response()->json([
            "status" => true,
            "object" => $disciplina_object
        ]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function show(Disciplina $disciplina)
    {
        $olimpiada = Olimpiada::find($disciplina->olimpiada_id);
        $nombre = $disciplina->nombre;
        $participantes = $disciplina->participantes;
        $result = array("nombre" => $nombre, 
            "participantes" => $participantes,
            "olimpiada" => $olimpiada,
            "disciplina" => $disciplina);

        return response()->json([
            "status" => true, 
            "object" => $result
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function edit(Disciplina $disciplina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disciplina $disciplina)
    {
        //
        $disciplina = Disciplina::find($disciplina->id);
        $disciplina->nombre = $request->input("nombre");
        $disciplina->participantes = $request->input("participantes");
        $disciplina->olimpiada_id = $request->input("olimpiada_id");
        ///$disciplina->visible = $request->true;
        $disciplina->save();
        return response()->json(array("status" => true,
        "object" =>$disciplina));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disciplina $disciplina)
    {
        //
        $disciplina->visible = false;
        $disciplina->update();
    }
}
