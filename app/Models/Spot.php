<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;
    
    public function tags()
    {   //一つの投稿に複数のタグが付けられる
        return $this->belongsToMany(Tag::class);
    }
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
