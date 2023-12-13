<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable  = [
        'total',
        'arrived_at',
        'code_transaction',
        'status',
        'user_id'
    ];

    public function owner() {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function products() {
        return $this->belongsToMany(Product::class, 'order_product','commande_id', 'product_id');
    }
}
