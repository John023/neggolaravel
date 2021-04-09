<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>P. Apellido</th>
            <th>S. Apellido</th>
            <th>Correo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $empleados as $empleado )
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>
            <img src="{{ asset('storage').'/'.$empleado->Foto }}" width="250" alt="">
            </td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->PrimerApellido }}</td>
            <td>{{ $empleado->SegundoApellido }}</td>
            <td>{{ $empleado->Correo }}</td>
            <td>{{ $empleado->Estado }}</td>
            <td><a href="{{ url('/empleado/'.$empleado->id.'/edit') }}">Editar</a> |

            <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Deseas borrar éste registro?')" value="Borrar">

            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
