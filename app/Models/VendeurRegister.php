<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendeurRegister extends Model
{
    use HasFactory;

    protected $fillable =  [
        'nom',
        'prenom',
        'email',
        'photo',
        'city',
        'country',
        'piece',
        'boutique_name',
        'adresse_boutique',
        'image',
        'adresse'
    ];
}
