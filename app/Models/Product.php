<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function discounts()
    {
        return $this->hasMany(UserRole::class);
    }

    public function category()
    {
        return $this->hasMany(UserRole::class);
    }

    public function stock()
    {
        return $this->hasOne(UserRole::class);
    }
    
    public function transactions()
    {
        return $this->hasMany(UserRole::class);
    }



    protected $fillable = [
        'name',
        'price',
        'thumbnail',
        'desc',
        'category_id',
    ];
}
