@extends("layout")
@section("contenido")
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Email</th>
        </tr>
        <form class="form-control-lg" method="post" action="/actualizar-usuario">
            @csrf
            <tr>
                <input type="hidden" name="id" value="{{$data["id"]}}">
                <th><input type="text" size="10" name="nombre" @error('nombre') style="border: 1px solid red" @enderror value="{{$data["Nombre"]}}"></th>
                <th><input type="text" size="10" name="apellido" @error('apellido') style="border: 1px solid red" @enderror value="{{$data["Apellidos"]}}"></th>
                <th><input type="text" size="10" name="direccion" @error('direccion') style="border: 1px solid red" @enderror value="{{$data["Direccion"]}}"></th>
                <th><input type="text" size="10" name="telefono" @error('telefono') style="border: 1px solid red" @enderror value="{{$data["Telefono"]}}"></th>
                <th><input type="text" size="30" name="email" @error('email') style="border: 1px solid red" @enderror value="{{$data["Email"]}}"></th>

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
                     @error('email')
                     <br><span style="color: red">{{$message}}</span>
                     @enderror
                </th>

            <tr>
                <td colspan="8">
                    <input type="submit" name="submit" value="Actualizar">
                </td>

            </tr>

        </form>
    </table>
@endsection
