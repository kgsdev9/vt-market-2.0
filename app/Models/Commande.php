<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable  = [
        'reference',
        'delivry_status',
        'price_delivry',
        'user_id',
        'paymentadresse_id'
    ];


    public function owner() {
        return $this->belongsTo(User::class, 'user_id');
    }

 

    public function products() {
        return $this->belongsToMany(Product::class, 'order_product', 'commande_id','product_id')
        ->withPivot('quantity','total')
        ->withTimestamps();
    }


}
