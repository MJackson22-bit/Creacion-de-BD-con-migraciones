<!DOCTYPE html>
@extends('index')

@section('list_profesor')

   {{$message}}

 

   <br/>

 

   @if (count($listaProfesor) > 0)

      <div class="container" >
         <table class="table  table-dark">

            <tr>
               <th scope="col"><h3>Información</h3> </th>
               <th scope="col"><h3>Acciones</h3> </th>
   
            </tr> 
   
            @foreach($listaProfesor as $data)
   
               <tr>

   
                  <td> <b>Identificador:</b> {{ $data->id }} <br/> 
   
                        Nombre: {{ $data->nombre }} <br/> 
   
                        Apellido: {{ $data->apellido }}  <br/> 
                        Título: {{ $data->titulo }}  <br/> 
                        
                  </td>
                  <td>

                     <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ asset('/alumno/delete/' . $data->id) }}" class="btn btn-warning">Eliminar</a>
                     <a href="{{ asset('/alumno/create/' . $data->id) }}" class="btn btn-success">Editar</a>
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