<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductClick extends Model
{
    protected $fillable = ['product_id', 'ip', 'device', 'platform', 'browser'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    // public function productDetail()
    // {
    //     return $this->belongsTo(ProductDetail::class, 'product_id');
    // }
}
