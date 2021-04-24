<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function guardar(Request $data){
        $usuario = New Usuario();
        $usuario->Nombre=$data["nombre"];
        $usuario->Apellidos=$data["apellido"];
        $usuario->Direccion=$data["direccion"];
        $usuario->Telefono=$data["telefono"];
        $usuario->save();
        return view("/servicios");
    }

}
