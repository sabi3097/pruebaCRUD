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
    $tipos_docs = app()->make(\App\Http\Controllers\TipTipoDocsController::class)->index()['tipo_docs'];
    return view('create', ['pro_procesos' => $pro_procesos, 'tipos_docs' => $tipos_docs]);
})->name('procesos_tipos_documentos.index');


Route::post('/store', [DocDocumentosController::class, 'store'])->name('doc_documentos.store');

Route::get('/edit', [DocDocumentosController::class, 'edit'])->name('doc_documentos.edit');

Route::get('/show', [DocDocumentosController::class, 'show'])->name('doc_documentos.show');

//Route::get('/prueba', [DocDocumentosController::class, 'index'])->name('tip_tipo_docs.index');

