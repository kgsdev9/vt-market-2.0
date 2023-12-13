<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeCredit extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendeur_id',
        'message',
    ];

    public function vendeur() {
        return $this->belongsTo(Vendeur::class, 'vendeur_id');
    }
}
