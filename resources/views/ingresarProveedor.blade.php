
@extends("layout")
@section("contenido")
    <h1>INGRESAR PROVEEDOR</h1>
        <form class="form-group form-control-lg" method="post" action="/ingresar-proveedor" >
            @csrf
                <th class="form-control"><input type="text" maxlength="100" name="nombre" @error('nombre') style="border: 1px solid red" @enderror placeholder="Nombre"></th>
                @error('nombre')
                <br><span style="color: red">{{$message}}</span>
                @enderror
                <br>
                <th class="form-control"><input type="text" maxlength="200" name="apellido" @error('apellido') style="border: 1px solid red" @enderror placeholder="Apellidos"></th>
                @error('apellido')
                <br><span style="color: red">{{$message}}</span>
                @enderror
                <br>
                <th class="form-control"><input type="text" maxlength="200" name="direccion" @error('direccion') style="border: 1px solid red" @enderror placeholder="Direccion"></th>
                @error('direccion')
                <br><span style="color: red">{{$message}}</span>
                @enderror
                <br>
                <th class="form-control"><input type="number" maxlength="9" name="telefono" @error('telefono') style="border: 1px solid red" @enderror placeholder="Telefono/celular"></th>
                @error('telefono')
                <br><span style="color: red">{{$message}}</span>
                @enderror
                <br>
                <td colspan="5"><input type="submit" name="submit" value="Guardar"></td>
                <td colspan="5"><input type="reset" name="reset" value="Limpiar"></td>

        </form>
@endsection
