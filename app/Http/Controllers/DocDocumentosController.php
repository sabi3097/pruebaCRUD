<?php

namespace App\Http\Controllers;

use App\Models\doc_documentos;
use Illuminate\Http\Request;
use App\Models\pro_procesos;

class DocDocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $doc_documentos = doc_documentos::with('pro_procesos')->get();
       // dd($doc_documentos);
        return view('welcome', compact('doc_documentos'));
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }
    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        //print_r($_POST);
        $documentos = new doc_documentos();
        $documentos-> doc_nombre = $request->get('doc_nombre');
        $documentos-> doc_contenido = $request->get('doc_contenido');
        $documentos->pro_procesos_id = $request->get('pro_proceso_id');
        $documentos->tip_tipo_docs_id = $request->get('tip_tipo_docs_id');
        $documentos-> doc_codigo = $request->get('doc_codigo');
        $documentos-> save();

        return redirect()->route('doc_documentos.index')->with("success", "Agregado Satisfactoriamente!");
    }

    /**
     * Display the specified resource.
     */
    public function show(doc_documentos $doc_documentos)
    {
        return view('delete');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id,)
    {
        $edit_documentos = doc_documentos::find($id);
        return view('update', compact('edit_documentos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update_documentos = doc_documentos::find($id);
        $update_documentos-> doc_nombre = $request->get('doc_nombre');
        $update_documentos-> doc_contenido = $request->get('doc_contenido');
        $update_documentos->pro_procesos_id = $request->get('pro_proceso_id');
        $update_documentos->tip_tipo_docs_id = $request->get('tip_tipo_docs_id');
        $update_documentos-> doc_codigo = $request->get('doc_codigo');
        $update_documentos-> save();

        return redirect()->route('doc_documentos.index')->with("success", "Actualizado Satisfactoriamente!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(doc_documentos $doc_documentos)
    {
        //
    }
}
