<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'slug',
        'description',
        'image_couverture',
        'city_id',
        'country_id',
        'adresse',
        'vendeur_id'
    ];

    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function vendeur() {
        return $this->belongsTo(Vendeur::class, 'vendeur_id');
    }

    public function country() {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
