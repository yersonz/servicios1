<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function guardar(Request $data){
        $data->validate(
        ['nombre'=>'required | alpha',
        'apellido'=>'required | alpha',
        'direccion'=>'required',
        'telefono'=>'required | max:9 | min:9'
        ]
        );
        $proveedor = New Proveedor();
        $proveedor->Nombre = $data->nombre;
        $proveedor->Apellidos = $data->apellido;
        $proveedor->Direccion = $data->direccion;
        $proveedor->Telefono = $data->telefono;
        $proveedor->save();
        return redirect("/mostrar-proveedor");
    }
    public function mostrar()
    {
        $resultados = Proveedor::all();
        return view("mostrarProveedor",["resultados"=>$resultados]);
    }
    public  function mostrarProveedor(int $id){
        $resultados= Proveedor::where("id",$id)->first();
        return view("actualizarProveedor",["data"=>$resultados]);

    }
    public function actualizar(Request $request){
        $request->validate(
            ['nombre'=>'required | alpha',
                'apellido'=>'required | alpha',
                'direccion'=>'required',
                'telefono'=>'required | max:9 | min:9'
            ]
        );
        $proveedor = Proveedor::find($request->id);
        $proveedor->Nombre = $request->nombre;
        $proveedor->Apellidos = $request->apellido;
        $proveedor->Direccion = $request->direccion;
        $proveedor->Telefono = $request->telefono;
        $proveedor->save();
        return redirect("/mostrar-proveedor");
    }
    public function eliminar(Proveedor $id){
        $id->delete();
        return back()->with("succes","usuario eliminado correctamente");

    }
}
