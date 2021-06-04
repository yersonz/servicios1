@extends("layouts.app")
@section("content")
    <div class="container">
    <table class="table">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        <tr>
            @foreach($resultados as $usuario)
                <td>{{$usuario["Nombre"]}}</td>
                <td>{{$usuario["Apellidos"]}}</td>
                <td>{{$usuario["Direccion"]}}</td>
                <td>{{$usuario["Telefono"]}}</td>
                <td>{{$usuario["Email"]}}</td>
                <td><a href="/actualizar-usuario/{{$usuario["id"]}}">Actualizar</a></td>
                <form action="{{route("eliminar",$usuario->id)}}" method="POST">
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
