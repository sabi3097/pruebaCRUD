<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class tip_tipo_docs extends Model
{
    use HasFactory;

    public function doc_documentos(): HasMany
    {
        return $this->hasMany(doc_documentos::class);
    }
}
