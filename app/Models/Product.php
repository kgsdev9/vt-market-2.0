<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'prix',
        'category_id',
        'marque_id',
        'publish_at',
        'view'
    ];

    public function category() {
        return $this-> belongsTo(Category::class, 'category_id');
    }

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function maruqe() {
        return $this-> belongsTo(Marque::class, 'marque_id');
    }

    public function commandes() {
        return $this->belongsToMany(Commande::class, 'order_product', 'product_id','commande_id');
    }

}
