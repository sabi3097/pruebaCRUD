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
        return view('welcome', ['doc_documentos' => $doc_documentos]);
      
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
        $documentos-> doc_nombre = $request->post('doc_nombre');
        $documentos-> doc_contenido = $request->post('doc_contenido');
        $documentos-> doc_codigo = $request->post('');
        $documentos-> save();
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
    public function edit(doc_documentos $doc_documentos)
    {
        return view('update');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, doc_documentos $doc_documentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(doc_documentos $doc_documentos)
    {
        //
    }
}
