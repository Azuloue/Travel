<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    
    public function spots()
    {   //タグは複数の投稿に付けられる
        return $this->belongsToMany(Spot::class);
    }
}
