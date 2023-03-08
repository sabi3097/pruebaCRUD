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

}
