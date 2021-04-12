<h1>{{ $modo }} empleado</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="Nombre"> Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre">
</div>

<div class="form-group">
    <label for="Primer Apellido"> Primer Apellido</label>
    <input type="text" class="form-control" name="PrimerApellido" value="{{ isset($empleado->PrimerApellido)?$empleado->PrimerApellido:old('PrimerApellido') }}">
</div>

<div class="form-group">
    <label for="Segundo Apellido"> Segundo Apellido</label>
    <input type="text" class="form-control" name="SegundoApellido" value="{{ isset($empleado->SegundoApellido)?$empleado->SegundoApellido:old('SegundoApellido') }}">
</div>

<div class="form-group">
    <label for="Correo"> Correo</label>
    <input type="text" class="form-control" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}">
</div>

<div class="form-group">
    @if(isset($empleado->Foto))
    <img src="{{ asset('storage').'/'.$empleado->Foto }}" class="img-thumbnail img-fluid" width="250">
    @endif

    <input type="file" class="form-control" name="Foto" value="">
</div>


<label for="Estado"> Estado</label>
<input type="checkbox" name="Estado" value="on" checked> <br>

<br>

<input type="submit" class="btn btn-success" value="{{ $modo }} datos">

<a href="{{ url('empleado/') }}" class="btn btn-primary">Regresar</a>
