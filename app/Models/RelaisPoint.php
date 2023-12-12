<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelaisPoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_at',
        'countr_end',
        'city_at',
        'city_end',
        'price'
    ];

}
