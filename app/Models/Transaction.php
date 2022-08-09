<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->belongsTo(UserRole::class);
    }

    public function users()
    {
        return $this->belongsTo(UserRole::class);
    }
    protected $fillable = [
        'product_id',
        'user_id',
        'quantity',
        'status',
        'invoice_code',
    ];
}
