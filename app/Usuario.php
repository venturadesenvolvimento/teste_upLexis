<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "Usuario";
    protected $fillable = ["usuario","senha"];

    public static function getUsuario($usuario, $senha)
    {
        if($usuario === "admin" && $senha === "admin")
        {
            $user = new \stdClass;
            $user->id = 1;
            $user->usuario = "admin";
            $user->senha = "admin";

            return $user;
        }

        return null;
    }
}
