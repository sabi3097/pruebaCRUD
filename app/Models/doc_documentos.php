<?php

namespace App\Models;

use App\Http\Controllers\DocDocumentosController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class doc_documentos extends Model
{
    use HasFactory;

    /**
     * Get the comments for the blog post.
     */
    public function doc_documentos(): HasMany
    {
        return $this->hasMany(doc_documentos::class);
    }
}
