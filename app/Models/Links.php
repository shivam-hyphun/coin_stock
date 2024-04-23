<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    use HasFactory;

    protected $table = 'links';

    protected $fillable = ['coin_id', 'name','url'];
    public function coins()
    {
        return $this->belongsTo(Coins::class, 'coin_id');
    }
}
