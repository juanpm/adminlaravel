<?php

namespace App\Http\Controllers;

use App\Usuariorol;
use Illuminate\Http\Request;

class UsuariorolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Usuariorol::all();

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
        //
        $usuariorol_object = new Usuariorol;
        $usuariorol_object->rol_id = $request->input("rol_id");
        $usuariorol_object->user_id = $request->input("user_id");
        $usuariorol_object->save();
        
        return response()->json(
            array("status" => true, "object" => $usuariorol_object)
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuariorol  $usuariorol
     * @return \Illuminate\Http\Response
     */
    public function show(Usuariorol $usuariorol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuariorol  $usuariorol
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuariorol $usuariorol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuariorol  $usuariorol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuariorol $usuariorol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuariorol  $usuariorol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuariorol $usuariorol)
    {
        //
        $usuariorol->delete();
    }
}
