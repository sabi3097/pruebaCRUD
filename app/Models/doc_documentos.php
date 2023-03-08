<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class doc_documentos extends Model
{
    use HasFactory;
    
        public function pro_procesos(){
            return $this->belongsTo(pro_procesos::class);
        }
        
        public function tip_tipo_docs(){
            return $this->belongsTo(tip_tipo_docs::class);
        }

        public function generarCodigo()
        {
            $pro_prefijo = $this->proceso->pro_prefijo;
            $tip_prefijo = $this->tipoDocumento->tip_prefijo;

            $consecutivo = doc_documentos::where('doc_id_proceso', $this->doc_id_proceso)
                ->where('doc_id_tipo', $this->doc_id_tipo)
                ->max('doc_consecutivo');

            $consecutivo++;
            return $tip_prefijo . '-' . $pro_prefijo . '-' . $consecutivo;
        }

        public function setDocIdProcesoAttribute($value)
        {
            $this->attributes['doc_id_proceso'] = $value;
            if ($this->id) {
                $this->attributes['doc_codigo'] = $this->generarCodigo();
            }
        }

        public function setDocIdTipoAttribute($value)
        {
            $this->attributes['doc_id_tipo'] = $value;
            if ($this->id) {
                $this->attributes['doc_codigo'] = $this->generarCodigo();
            }
        }


}
