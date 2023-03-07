<?php

use App\Http\Controllers\DocDocumentosController;
use App\Http\Controllers\TipTipoDocsController;
use App\Models\doc_documentos;
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

Route::get('/create', [DocDocumentosController::class, 'create'])->name('doc_documentos.create');

Route::get('/edit', [DocDocumentosController::class, 'edit'])->name('doc_documentos.edit');

Route::get('/prueba', [TipTipoDocsController::class, 'index']);

