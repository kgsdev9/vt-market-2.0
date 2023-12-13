<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Souscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_id',
        'user_id',
        'code_transaction'
    ];

    public function plan() {
        return $this->belongsTo(Plan::class, 'plan_id');
    }

    public function owner() {
        return $this->belongsTo(User::class, 'user_id');
    }

}
