<!DOCTYPE html>
@extends('index')

@section('contenido')
<div class="container" style="margin-top:45px;">
    <h2 align="center"><strong>{{$message}}</strong></h2>
</div>

   <br/>

 

   @if (count($listaClase) > 0)

      <div class="container" >
         <table class="table  table-dark">

            <tr>
               <th scope="col"><h3>Información</h3> </th>
               <th scope="col"><h3>Acciones</h3> </th>
   
            </tr> 
   
            @foreach($listaClase as $data)
   
               <tr>

   
                  <td> <b>Código de la clase:</b> {{ $data->codclase }} <br/> 
   
                        Nombre: {{ $data->nombre }} <br/> 
   
                        Número de Créditos: {{ $data->credito }} <br/> <br/> 
                        
                  </td>
                  <td>

                     <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ asset('/alumno/delete/' . $data->codclase) }}" class="btn btn-warning">Eliminar</a>
                     <a href="{{ asset('/alumno/create/' . $data->codclase) }}" class="btn btn-success">Editar</a>
                     </div>
                  </td>
   
               </tr>
   
            @endforeach
   
         </table>
         
   <a href="/alumno" class="btn btn-link">Ir Atrás</a>
      </div>
   @endif

 

   <br/>


 

@endsection