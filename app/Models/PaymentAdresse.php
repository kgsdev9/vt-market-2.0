<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentAdresse extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'country_id',
        'city_id',
        'adresse',
        'user_id',
    ];

    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function country() {
        return $this->belongsTo(Country::class, 'country_id');
    
    }
    
}
