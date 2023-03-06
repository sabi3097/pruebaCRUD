@extends('layouts.plantilla')

@section('tituloPagina', "Crea un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">
      Agregar Nuevo Registro
    </h5>
    <div class="card-body">
      <p class="card-text">
        <form action="#">
            <label for="">Nombre del Documento</label>
            <input type="text" name="doc_nombre" class="form-control" required>
            <label for="">Tipo de documento</label>
            <select name="doc_id_tipo" id="" class="form-control">
            </select>
            <label for="">Proceso</label>
            <select name="doc_id_proceso" id="" class="form-control">
            </select>
            <label for="">Codigo del Documento</label>
            <input type="text" name="doc_codigo" class="form-control" required>
            <br>
            <button class="btn btn-primary">Agregar</button>
            <a href="{{route("doc_documento.index")}}">Regresar</a>
        </form>
      </p>
    </div>
  </div>
    
@endsection