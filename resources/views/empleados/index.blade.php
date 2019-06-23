@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('mensaje')){{
    Session::get('mensaje')
}}
@endif
<a href="{{url('empleados/create')}}" class="btn btn-success" >Agregar Empleado</a><br><br>
<table class="table table-light table-hover">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>

        @foreach($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
            <img src="{{ asset('storage').'/'.$empleado->Foto}}" alt="" width="1e00" class="img-thumbnail img-fluid">
            </td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->Apellido}}</td>
            <td>{{$empleado->Edad}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>

            <a href="{{ url('/empleados/'.$empleado->id.'/edit')}}" class="btn btn-info" style="display:inline">
            Editar
            </a>
            
            

            | 
            
                <form action="{{url('/empleados/'.$empleado->id)}}" method="post">
                
                {{csrf_field()}}
                {{method_field('DELETE')}}

                <button type="submit" onclick="return confirm('¿Borrar?')" class="btn btn-warning" style="display:inline">Borrar</button>

                </form>

            </td>
        </tr>
        @endforeach
    </tbody>

</table>
<div>
@endsection