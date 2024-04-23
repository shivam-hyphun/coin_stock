<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    protected $table = 'tags';

    protected $fillable = ['coin_id', 'name'];

    public function coins()
    {
        return $this->belongsTo(Coins::class,'coin_id');
    }
}
