<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendeur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'whatsapp',
        'city_id',
        'photo',
        'country_id',
        'piece_identite '
    ];

    public function boutique() {
        return $this->hasOne(Boutique::class);
    }

    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function country() {
        return $this->belongsTo(Country::class, 'country_id');
    }

}
