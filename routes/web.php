<?php

use App\Http\Controllers\DocDocumentoController;
use App\Models\doc_documento;
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


Route::get('/', [DocDocumentoController::class, 'index'])->name('doc_documento.index');

Route::get('/create', [DocDocumentoController::class, 'create'])->name('doc_documento.create');

Route::get('/edit', [DocDocumentoController::class, 'edit'])->name('doc_documento.edit');