<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coins extends Model
{
    use HasFactory;
    
    protected $table = 'coins';

    protected $fillable = [
        'name',
        'short_name',
        'price',
        'market_capacity',
        'volume',
        'circulating_supply',
        'max_supply',
        'fully_diluted_market_cap',
        'ucid',
        'image',

    ];

    public function tags()
    {
        return $this->hasMany(Tags::class, 'coin_id');
    }

    public function links()
    {
        return $this->hasMany(Links::class, 'coin_id');
    }
}
