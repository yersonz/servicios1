
@extends("layouts.app")
@section("content")
    <div class="container">
    <h1>Ingresar Proveedor</h1>
        <form method="post" action="/ingresar-proveedor" >
            @csrf
                <input type="text" maxlength="100" class="form-control" name="nombre" @error('nombre') style="border: 1px solid red" @enderror placeholder="Nombre"></th>
                @error('nombre')
                <br><span style="color: red">{{$message}}</span>
                @enderror
                <br>
                <input type="text" maxlength="200" class="form-control" name="apellido" @error('apellido') style="border: 1px solid red" @enderror placeholder="Apellidos">
                @error('apellido')
                <br><span style="color: red">{{$message}}</span>
                @enderror
                <br>
                <input type="text" maxlength="200" class="form-control" name="direccion" @error('direccion') style="border: 1px solid red" @enderror placeholder="Direccion">
                @error('direccion')
                <br><span style="color: red">{{$message}}</span>
                @enderror
                <br>
                <input type="number" maxlength="9" class="form-control" name="telefono" @error('telefono') style="border: 1px solid red" @enderror placeholder="Telefono/celular">
                @error('telefono')
                <br><span style="color: red">{{$message}}</span>
                @enderror
                <br>
                <td colspan="5"><input type="submit" class="btn btn-primary mt-2" name="submit" value="Guardar"></td>
                <td colspan="5"><input type="reset" class="btn btn-secondary mt-21" name="reset" value="Limpiar"></td>

        </form>
    </div>
@endsection
