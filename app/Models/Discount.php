<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->belongsTo(UserRole::class);
    }
    protected $fillable = [
        'product_id',
        'percentage',
        'start_date',
        'end_date',
    ];
}
