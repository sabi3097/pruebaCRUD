<?php

namespace App\Http\Controllers;

use App\Models\doc_documentos;
use Illuminate\Http\Request;

class DocDocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        return view('welcome');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(doc_documentos $doc_documentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(doc_documentos $doc_documentos)
    {
        //
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
