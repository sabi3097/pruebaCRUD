@extends('layouts.plantilla')

@section('tituloPagina', "Elimina Un registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">
      Eliminar el registro
    </h5>
    <div class="card-body">
      <p class="card-text">
        <div class="alert alert-danger" role="alert">
            ¿Estas seguro de que quieres eliminar el registro?
            <br><br>
            <table class="table table-sm table-hover table-bordered">
                <thead>
                    <thead>
                            <th>Documento</th>
                            <th>Proceso</th>
                            <th>Tipo</th>
                            <th>Código</th>
                    </thead>
                    <tbody>
                            <tr>
                              <td>{{$show_documentos->doc_nombre}}</td>                                                            
                              <td>{{$show_documentos->pro_procesos->pro_nombre}}</td>
                              <td>{{$show_documentos->tip_tipo_docs->tip_nombre}}</td>
                              <td>{{$show_documentos->doc_codigo}}</td>                            
                            </tr> 
                    </tbody>
                </thead>
            </table>
                <a href="{{route('doc_documentos.index')}}">Regresar</a>
                <form action="{{ route('doc_documentos.destroy', $show_documentos->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger">Eliminar</button>
                </form>
          </div>
      </p>
    </div>
  </div>
    
@endsection