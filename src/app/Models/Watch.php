<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Watch extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',              // Titolo dell'annuncio
        'brand',              // Marca dell'orologio
        'model',              // Modello specifico
        'reference_number',   // Numero di riferimento
        'year',              // Anno di produzione
        'condition',         // Condizioni (nuovo, usato, etc.)
        'price',             // Prezzo richiesto
        'description',       // Descrizione dettagliata
        'case_material',     // Materiale della cassa
        'case_diameter',     // Diametro della cassa in mm
        'movement_type',     // Tipo di movimento (automatico, manuale, etc.)
        'bracelet_material', // Materiale del cinturino
        'location',          // Località del venditore
        'box_papers',        // Presenza di scatola e documenti (bool)
        'warranty',          // Informazioni sulla garanzia
        'status',           // Stato dell'annuncio (attivo, venduto, etc.)
        'user_id',          // ID del venditore
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'case_diameter' => 'decimal:1',
        'box_papers' => 'boolean',
        'year' => 'integer',
    ];

    // Relazione con l'utente (venditore)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relazione con le immagini
    public function images()
    {
        return $this->hasMany(WatchImage::class);
    }

    // Relazione con i preferiti
    public function favorites()
    {
        return $this->belongsToMany(User::class, 'watch_favorites');
    }

    // Relazione con le categorie
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    // Scope per gli orologi attivi
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    // Scope per gli orologi in evidenza
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }
}
