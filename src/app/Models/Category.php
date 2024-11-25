<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',        // Nome della categoria
        'slug',        // Slug per URL SEO-friendly
        'description', // Descrizione della categoria
        'order',       // Ordine di visualizzazione
    ];

    // Relazione con gli orologi (many-to-many)
    public function watches()
    {
        return $this->belongsToMany(Watch::class);
    }

    // Scope per ordinare le categorie
    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}
