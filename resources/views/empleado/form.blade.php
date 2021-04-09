<label for="Nombre"> Nombre</label>
<input type="text" name="Nombre" value="{{ $empleado->Nombre }}" id="Nombre"> <br>

<label for="Primer Apellido"> Primer Apellido</label>
<input type="text" name="PrimerApellido" value="{{ isset$empleado->PrimerApellido }}"> <br>

<label for="Segundo Apellido"> Segundo Apellido</label>
<input type="text" name="SegundoApellido" value="{{ $empleado->SegundoApellido }}"> <br>

<label for="Correo"> Correo</label>
<input type="text" name="Correo" value="{{ $empleado->Correo }}"> <br>

<label for="Foto"> Foto</label>
<img src="{{ asset('storage').'/'.$empleado->Foto }}" width="250" alt="">
<input type="file" name="Foto" value=""> <br>

<label for="Estado"> Estado</label>
<input type="checkbox" name="Estado" value="{{ $empleado->Estado }}"> <br>

<br>

<input type="submit" value="Enviar">
