
<br>
    <div class="form-group">
    <label for="Nombre" class="control-label">{{'Nombre'}}</label>
    <input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':''}} " name="Nombre" id="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:'' }}"><br>
    <div class="invalid-feedback">
        Ingrese Su Nombre
    </div>
    </div>

    <div class="form-group">
    <label for="Apellido" class="control-label">{{'Apellido'}}</label>
    <input type="text" class="form-control {{$errors->has('Apellido')?'is-invalid':''}}" name="Apellido" id="Apellido" value="{{isset($empleado->Apellido)?$empleado->Apellido:'' }}"><br>
    <div class="invalid-feedback">
        Ingrese Su Apellido
    </div>
    </div>

    <div class="form-group">
    <label for="Edad" class="control-label">{{'Edad'}}</label>
    <input type="text" class="form-control {{$errors->has('Edad')?'is-invalid':''}}" name="Edad" id="Edad" value="{{isset($empleado->Edad)?$empleado->Edad:'' }}"><br>
    <div class="invalid-feedback">
        Ingrese Su Edad
    </div>
    </div>

    <div class="form-group">
    <label for="Correo" class="control-label">{{'Correo'}}</label>
    <input type="email" class="form-control {{$errors->has('Correo')?'is-invalid':''}}" name="Correo" id="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:'' }}"><br>
    <div class="invalid-feedback">
        Ingrese Su Correo
    </div>
    </div>

    <div class="form-group">
    <label for="Foto" class="control-label">{{'Foto'}}</label>
    @if(isset($empleado->Foto))
    <br>
    <img src="{{ asset('storage').'/'.$empleado->Foto}}" alt="" width="100" class="img-thumbnail img-fluid"><br>
    @endif
    <input type="file" class="form-control {{$errors->has('Foto')?'is-invalid':''}}" name="Foto" id="Foto" value=""><br>
    <div class="invalid-feedback">
        Ingrese Su Foto
    </div>
    <div>

    <input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">
    <a href="{{url('empleados')}}" class="btn btn-primary">Regresar</a>