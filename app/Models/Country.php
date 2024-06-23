<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->paginate($limit_count);
    }
    
    public function spots()
    {
        return $this->hasMany(Spot::class);
    }
    public function area(){
        return $this->belongsTo(Area::class);
    }
    public function getByCountry(int $limit_count = 5)
    {
     return $this->spots()->with('country')->paginate($limit_count);
    }
}
