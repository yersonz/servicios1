@extends("layouts.app")
@section("content")
    <div class="container">
    <table class="table">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Telefono</th>
        </tr>
        <form method="post" action="/actualizar-proveedor">
            @csrf
        <tr>
                <input type="hidden" name="id" value="{{$data["id"]}}">
                <th><input type="text" size="20" name="nombre" @error('nombre') style="border: 1px solid red" @enderror value="{{$data["Nombre"]}}"></th>
                <th><input type="text" size="20" name="apellido" @error('apellido') style="border: 1px solid red" @enderror value="{{$data["Apellidos"]}}"></th>
                <th><input type="text" size="20" name="direccion" @error('direccion') style="border: 1px solid red" @enderror value="{{$data["Direccion"]}}"></th>
                <th><input type="text" size="20" name="telefono" @error('telefono') style="border: 1px solid red" @enderror value="{{$data["Telefono"]}}"></th>

        </tr>
            <th>
                @error('nombre')
                <br><span style="color: red">{{$message}}</span>
                @enderror
                @error('apellido')
                <br><span style="color: red">{{$message}}</span>
                @enderror
                @error('direccion')
                <br><span style="color: red">{{$message}}</span>
                @enderror
                @error('telefono')
                <br><span style="color: red">{{$message}}</span>
                @enderror
            </th>
        <tr>
         <td colspan="8">
            <input type="submit" class="btn btn-primary mt-2" name="submit" value="Actualizar">
         </td>

        </tr>
        </form>
    </table>
    </div>
@endsection
