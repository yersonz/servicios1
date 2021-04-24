<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Consulta;

class ConsultaController extends Controller
{
    public function consulta(Request $data){
        $servicio= New Consulta();
        $servicio->Nombre=$data["nombre"];
        $servicio->Nombre=$data["nombre"];
    }
}
