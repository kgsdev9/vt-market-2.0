<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle_boutique',
        'slug',
        'adresse',
        'nom_vendeur',
        'prenom_vendeur',
        'description',
        'telephone',
        'contact',
        'status',
        'city_id',
        'country_id',
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }

}
