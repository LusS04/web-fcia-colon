<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    // Relación uno a muchos
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}