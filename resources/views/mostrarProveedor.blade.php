@extends("layouts.app")
@section("content")
    <div class="container">
    <table class="table">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
        <tr>
            @foreach($resultados as $proveedor)
                <td>{{$proveedor["Nombre"]}}</td>
                <td>{{$proveedor["Apellidos"]}}</td>
                <td>{{$proveedor["Direccion"]}}</td>
                <td>{{$proveedor["Telefono"]}}</td>
                <td><a href="/actualizar-proveedor/{{$proveedor["id"]}}">Actualizar</a></td>
                    <form action="{{route("eliminar",$proveedor->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <td>
                    <input type="submit" class="btn btn-danger" name="eliminar" value="Eliminar">
                </td>
                </form>

        </tr>
            @endforeach


    </table>
    </div>
@endsection
