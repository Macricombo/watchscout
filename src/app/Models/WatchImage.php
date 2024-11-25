<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'watch_id',
        'path',          // Percorso dell'immagine
        'order',         // Ordine di visualizzazione
        'is_primary',    // Immagine principale
    ];

    protected $casts = [
        'is_primary' => 'boolean',
        'order' => 'integer',
    ];

    public function watch()
    {
        return $this->belongsTo(Watch::class);
    }
}
