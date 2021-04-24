@extends("layout")
@section("contenido")
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Telefono</th>
        </tr>
        <tr>
            @foreach($resultados as $proveedor)
                <th>{{$proveedor["Nombre"]}}</th>
                <th>{{$proveedor["Apellidos"]}}</th>
                <th>{{$proveedor["Direccion"]}}</th>
                <th>{{$proveedor["Telefono"]}}</th>
            @endforeach
        </tr>
    </table>
@endsection
