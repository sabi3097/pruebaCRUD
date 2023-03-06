@extends('layouts.plantilla')


@section('tituloPagina', 'CRUD')

@section('contenido')

<div class="card">
    <h5 class="card-header">
        Gestion de Documentos (CRUD)
    </h5>
    <div class="card-body">
        <p>
            <a href="{{route("doc_documento.create")}}" class="btn btn-primary">Agregar registro</a>
        </p>
        @php
            print_r($tip_tipo_doc);
        @endphp
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
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>                              
                            </tr>
                        </tbody>
                    </thead>
                </table>
            </div>
    </div>
  </div>

@endsection