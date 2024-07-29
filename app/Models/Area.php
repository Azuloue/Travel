<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    
    public function getByLimit(int $limit_count = 5)
    {
        return $this->limit($limit_count)->get();
    }
    
    public function countries()
    {
        return $this->hasMany(Country::class);
    }

}
