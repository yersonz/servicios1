<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function guardar(Request $data){
        $proveedor = New Proveedor();
        $proveedor->Nombre=$data["nombre"];
        $proveedor->Apellidos=$data["apellido"];
        $proveedor->Direccion=$data["direccion"];
        $proveedor->Telefono=$data["telefono"];
        $proveedor->save();
        return "Proveedor Guardado";
    }
    public function mostrar()
    {
        $resultados = Proveedor::all();
        return view("mostrarProveedor",["resultados"=>$resultados]);
    }
}
