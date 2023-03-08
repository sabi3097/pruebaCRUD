@extends('layouts.plantilla')

@section('tituloPagina', "Actualiza registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">
      Actualizar El Registro
    </h5>
    
    <div class="card-body">
      <p class="card-text">
        <form action="{{route('doc_documentos.update', $edit_documentos->id)}}" method="POST">
              @csrf
            @method("PUT")
            <label for="">Nombre del Documento</label>
            <input type="text" name="doc_nombre" class="form-control" required value="{{$edit_documentos->doc_nombre}}">

          
            <label for="">Tipo de documento</label>
            <select name="tip_tipo_docs_id" id="" class="form-control">
              @foreach($tip_tipos_docs as $item)
                <option value="{{ $item->id }}" 
                  @if($edit_documentos->tip_tipo_docs_id == $item->id) selected 
                  @endif>{{ $item->tip_prefijo }} - {{ $item->tip_nombre }}
                </option>
              @endforeach
            </select>
              
            <label for="">Proceso</label>
            <select name="pro_procesos_id" id="" class="form-control">
              @foreach ($pro_procesos as $item)                  
                <option value="{{$item->id}}"
                  @if($edit_documentos->por_proceso_id == $item->id) selected 
                  @endif>{{$item->pro_prefijo}} - {{$item->pro_nombre}}</option>
              @endforeach
            </select>

            <label for="">Codigo Documento</label>
            <input type="text" name="doc_codigo" class="form-control" value="{{$edit_documentos->doc_codigo}}">

            <label for="">Contenido del Documento</label>
            <input type="text" name="doc_contenido" class="form-control" value="{{$edit_documentos->doc_contenido}}" required>

            <br>
            <button class="btn btn-warning">Actualizar</button>
            <a href="{{route("doc_documentos.index")}}">Regresar</a>
        </form>
      </p>
    </div>
  </div>

@endsection