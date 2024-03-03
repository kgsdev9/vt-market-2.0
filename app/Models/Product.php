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
        'popular',
        'view',
        'slug',
        'boutique_id',
        'estimation'
    ];

    public function category() {
        return $this-> belongsTo(Category::class, 'category_id');
    }

    public function boutique() {
        return $this-> belongsTo(Boutique::class, 'boutique_id');
    }

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function orders() {
        return $this->belongsToMany(Product::class, 'order_product', 'commande_id','product_id')
                    ->withPivot('quantity','total')
                    ->withTimestamps();
    }


}
