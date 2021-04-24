@extends("layout")
@section("contenido")
    <table>
        <h2>SERVICIOS</h2>
        <tr>
            <th>Nombre</th>
            <th>Tipo de Servicios</th>
        </tr>
        <form method="post" action="/ingresar-proveedor">
            @csrf
            <tr>
                <th><input type="text" maxlength="100" name="nombre"></th>
                <th>
                    <select >
                        <option name="enfermero">Enfermeros</option>
                        <option name="medio">Medicos</option>
                        <option name="electricista">Electricista</option>
                        <option name="pintor">Pintores</option>
                        <option name="profesor">Profesores</option>
                        <option name="ingeniero">Ingenieros</option>
                        <option name="tecnico">Tecnicos</option>
                    </select>
                </th>
            </tr>
            <tr>
                <td colspan="5"><input type="submit" name="submit" value="Buscar"></td>
            </tr>
            <tr>
                <td colspan="5"><input type="reset" name="reset" value="Limpiar"></td>
            </tr>
        </form>



    </table>
@endsection
