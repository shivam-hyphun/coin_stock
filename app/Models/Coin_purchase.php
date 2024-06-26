<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin_purchase extends Model
{

    use HasFactory;

    protected $fillable = [
        'coin_id',
        'user_id',
        'coin_price',
        'quantity',
        'total_price'
    ];

    public function coins()
    {
        return $this->belongsTo(Coins::class, 'coin_id');
    }
}
