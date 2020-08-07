<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    public static function getNombresByUserId($user_id) {
        $o = Persona::where("user_id", $user_id)->first();
        if ( $o ) {
            return $o->nombrecompleto;
        }
        return "Desconocido";
    }
}
