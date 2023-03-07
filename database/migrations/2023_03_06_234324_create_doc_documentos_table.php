<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doc_documentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('doc_nombre', 150);
            $table->string('doc_codigo', 20);
            $table->text('doc_contenido', 255);
            $table->foreignId('pro_procesos_id');
            $table->foreignId('tip_tipo_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doc_documentos');
    }
};
