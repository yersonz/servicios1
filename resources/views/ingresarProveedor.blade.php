
@extends("layout")
@section("contenido")
    <table>
        <h2>INGRESAR PROVEEDOR</h2>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Telefono</th>
        </tr>
        <form method="post" action="/ingresar-proveedor">
            @csrf
            <tr>
                <th><input type="text" maxlength="100" name="nombre"></th>
                <th><input type="text" maxlength="200" name="apellido"></th>
                <th><input type="text" maxlength="200" name="direccion"></th>
                <th><input type="number" maxlength="9" name="telefono"></th>
            </tr>
            <tr>
                <td colspan="5"><input type="submit" name="submit" value="Guardar"></td>
            </tr>
            <tr>
                <td colspan="5"><input type="reset" name="reset" value="Limpiar"></td>
            </tr>
        </form>



    </table>
@endsection
