<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'product_id',
        'user_id',
        'quantity',
        'total',
        'date',
    ];

    public function product()
    {
        return $this->belongsTo(
            'App\Models\Product',
            'product_id',
            'id'
        )->withDefault();
    }

    public function user()
    {
        return $this->belongsTo(
            'App\Models\User',
            'user_id',
            'id'
        )->withDefault();
    }
}
