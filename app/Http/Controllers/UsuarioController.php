<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function guardar(Request $data){
        $data->validate(
            [   'nombre'=>'required | alpha',
                'apellido'=>'required | alpha',
                'direccion'=>'required',
                'telefono'=>'required | max:9 | min:9',
                'email'=>'required | email'
            ]
        );
        $usuario = New Usuario();
        $usuario->Nombre=$data["nombre"];
        $usuario->Apellidos=$data["apellido"];
        $usuario->Direccion=$data["direccion"];
        $usuario->Telefono=$data["telefono"];
        $usuario->Email = $data["email"];
        $usuario->save();
        return view("/servicios");
    }
    public function mostrar()
    {
        $resultados =Usuario::all();
        return view("mostrarUsuario",["resultados"=>$resultados]);
    }
    public  function mostrarUsu(int $id){
        $resultados= Usuario::where("id",$id)->first();
        return view("actualizarUsuario",["data"=>$resultados]);

    }
    public function actualizar(Request $request){
        $request->validate(
            [   'nombre'=>'required | alpha',
                'apellido'=>'required | alpha',
                'direccion'=>'required',
                'telefono'=>'required | max:9 | min:9',
                'email'=>'required | email'
            ]
        );
        $proveedor = Usuario::find($request->id);
        $proveedor->Nombre = $request->nombre;
        $proveedor->Apellidos = $request->apellido;
        $proveedor->Direccion = $request->direccion;
        $proveedor->Telefono = $request->telefono;
        $proveedor->Email = $request->email;
        $proveedor->save();
        return redirect("/mostrar-usuario");
    }
    public function eliminar(Usuario $id){
        $id->delete();
        return back()->with("succes","usuario eliminado correctamente");

    }

}
