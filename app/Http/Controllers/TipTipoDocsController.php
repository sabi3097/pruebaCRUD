<?php

namespace App\Http\Controllers;

use App\Models\tip_tipo_docs;
use Illuminate\Http\Request;

class TipTipoDocsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tip_tipo_docs = tip_tipo_docs::all();
        return view('create', compact('tip_tipo_docs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(tip_tipo_docs $tip_tipo_docs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tip_tipo_docs $tip_tipo_docs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tip_tipo_docs $tip_tipo_docs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tip_tipo_docs $tip_tipo_docs)
    {
        //
    }
}
