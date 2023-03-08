<?php

namespace App\Http\Controllers;

use App\Models\doc_documentos;
use Illuminate\Http\Request;
use App\Models\pro_procesos;
use App\Models\tip_tipo_docs;

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
        $tip_tipos_docs = tip_tipo_docs::all();
        $pro_procesos = pro_procesos::all();
    
        return view('create', compact('tip_tipos_docs','pro_procesos'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'doc_nombre' => 'required',
            'tip_tipo_docs_id' => 'required|integer',
            'pro_procesos_id' => 'required|integer',
            'doc_contenido' => 'required',
        ]);
    
        $tipo = tip_tipo_docs::find($validatedData['tip_tipo_docs_id']);
        $proceso = pro_procesos::find($validatedData['pro_procesos_id']);
    
        $consecutivo = doc_documentos::where('tip_tipo_docs_id', $tipo->id)
                                   ->where('pro_procesos_id', $proceso->id)
                                   ->count() + 1;
    
        $codigo = $tipo->tip_prefijo . '-' . $proceso->pro_prefijo . '-' . $consecutivo;
    


        //print_r($_POST);
        $documentos = new doc_documentos();
        $documentos-> doc_nombre = $request->get('doc_nombre');
        $documentos-> doc_contenido = $request->get('doc_contenido');
        $documentos->pro_procesos_id = $request->get('pro_procesos_id');
        $documentos->tip_tipo_docs_id = $request->get('tip_tipo_docs_id');
        $documentos-> doc_codigo = $codigo;
        $documentos-> save();

        return redirect()->route('doc_documentos.index')->with("success", "Agregado Satisfactoriamente!");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $show_documentos = doc_documentos::find($id);
        return view('delete', compact('show_documentos'));
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
        $update_documentos->pro_procesos_id = $request->get('pro_procesos_id');
        $update_documentos->tip_tipo_docs_id = $request->get('tip_tipo_docs_id');
        $update_documentos-> doc_codigo = $request->get('doc_codigo');
        $update_documentos-> save();

        return redirect()->route('doc_documentos.index')->with("success", "Actualizado Satisfactoriamente!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete_documentos = doc_documentos::find($id);
        $delete_documentos->delete();
        return redirect()->route('doc_documentos.index')->with("success", "Eliminado Satisfactoriamente!");
    }
}
