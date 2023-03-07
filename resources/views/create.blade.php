@extends('layouts.plantilla')

@section('tituloPagina', "Crea un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">
      Agregar Nuevo Registro
    </h5>
    
    <div class="card-body">
      <p class="card-text">
        <form action="{{route('doc_documentos.store')}}" method="POST">
              @csrf

              @isset($doc_documentos) 
              @endisset
              
            <label for="">Nombre del Documento</label>
            <input type="text" name="doc_nombre" class="form-control" required>

          
            <label for="">Tipo de documento</label>
            <select name="tip_tipo_id" id="" class="form-control">
                <option value="">Seleccione un valor..</option>
                  @if(isset($tipos_docs))
                      @foreach($tipos_docs as $item)
                          <option value="{{ $item->id }}">{{ $item->tip_prefijo }} - {{ $item->tip_nombre }}</option>
                      @endforeach
                  @endif
            </select>
              
            <label for="">Proceso</label>
            <select name="pro_proceso_id" id="" class="form-control">
              <option value="">Seleccione un valor..</option>
                 @if(@isset($pro_procesos))
                    @foreach ($pro_procesos as $item)
                    <option value="{{$item->id}}">{{$item->pro_prefijo}} - {{$item->pro_nombre}}</option>
                    @endforeach
                 @endif
            </select>

            <label for="">Contenido del Documento</label>
            <input type="text" name="doc_contenido" class="form-control" value="" required>


            <br>
            <button class="btn btn-primary">Agregar</button>
            <a href="{{route("doc_documentos.index")}}">Regresar</a>
        </form>
      </p>
    </div>
  </div>

@endsection