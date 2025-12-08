<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $table = 'batches';
    protected $fillable = [
        'id',
        'batch_number',
        'product_id',
        'production_date',
        'expire_date',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function getProductionDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d');
    }
}
