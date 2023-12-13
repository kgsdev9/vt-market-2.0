<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalanceBoutique extends Model
{
    use HasFactory;
    protected $fillable = [
        'balance',
        'boutique_id'
    ];

    public function boutique() {
        return $this->belongsTo(Boutique::class, 'boutique_id');
    }

}
