<?php

use App\Http\Controllers\DocDocumentosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [DocDocumentosController::class, 'index'])->name('doc_documentos.index');

Route::get('/create', function () {
    $pro_procesos = app()->make(\App\Http\Controllers\ProProcesosController::class)->index()['pro_procesos'];
    $tip_tipos_docs = app()->make(\App\Http\Controllers\TipTipoDocsController::class)->index()['tip_tipo_docs'];
    return view('create', ['pro_procesos' => $pro_procesos, 'tip_tipos_docs' => $tip_tipos_docs]);
})->name('procesos_tipos_documentos.index');

Route::get('/store', [DocDocumentosController::class, 'store'])->name('doc_documentos.store');

Route::get("/edit/{id}", function($id){
    $doc_documentos =app()->make(\App\Http\Controllers\DocDocumentosController::class)->index()['doc_documentos'];
    $pro_procesos = app()->make(\App\Http\Controllers\ProProcesosController::class)->index()['pro_procesos'];
    $tip_tipos_docs = app()->make(\App\Http\Controllers\TipTipoDocsController::class)->index()['tip_tipo_docs'];
    $edit_documentos = app()->make(\App\Http\Controllers\DocDocumentosController::class)->edit($id)['edit_documentos'];

    return view('update', ['doc_documentos' => $doc_documentos, 'pro_procesos' => $pro_procesos, 'tip_tipos_docs' => $tip_tipos_docs, 'edit_documentos' => $edit_documentos]);
})->name('update_documentos.edit');

Route::put('/update/{id}', [DocDocumentosController::class, 'update'])->name('doc_documentos.update');

Route::get('/show', function(){
    $doc_documentos =app()->make(\App\Http\Controllers\DocDocumentosController::class)->index()['doc_documentos'];
    return view('delete', ['doc_documentos' => $doc_documentos]);
})->name('show_documentos.show');


