@extends('layouts.plantilla')


@section('tituloPagina', 'CRUD')

@section('contenido')

<div class="card">
    <h5 class="card-header">
        Gestion de Documentos (CRUD)
    </h5>
    <div class="card-body">
        <p>
            <a href="{{route("procesos_tipos_documentos.index")}}" class="btn btn-primary">Agregar registro</a>
        </p>

        @if ($mensaje = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{$mensaje}}
          </div>
        @endif

      <div class="card-title">Listado de Documentos.</div>
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <thead>
                                <th>Documento</th>
                                <th>Proceso</th>
                                <th>Tipo</th>
                                <th>Código</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                        </thead>
                        <tbody>
                            @isset($doc_documentos)
                                @foreach ($doc_documentos as $item)
                                    <tr>
                                        <td>{{$item->doc_nombre}}</td>                                                            
                                        <td>{{$item->pro_procesos->pro_nombre}}</td>
                                        <td>{{$item->tip_tipo_docs->tip_nombre}}</td>
                                        <td>{{$item->doc_codigo}}</td>
                                        <td>                                            
                                            <form action="{{route("update_documentos.edit", $item->id)}}" method="GET">
                                                <button class="btn btn-sm btn-warning">
                                                    EDITAR
                                                </button>
                                            </form>
                                        </td>                                          
                                        <td>
                                            <form action="" method="GET">
                                                <a class="btn btn-sm btn-danger">ELIMINAR</a>     
                                            </form>                                            
                                        </td>                            
                                    </tr>                                     
                                @endforeach
                            @endisset

                        </tbody>
                    </thead>
                </table>
            </div>
    </div>
  </div>

@endsection