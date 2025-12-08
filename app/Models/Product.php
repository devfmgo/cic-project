<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'product_name',
        'slug',
        'product_code',
        'product_category_id',
        'obat_category_id',
        'uom_id',
    ];

    public function obatCategory()
    {
        return $this->belongsTo(ObatCategory::class, 'obat_category_id');
    }

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function uom()
    {
        return $this->belongsTo(Uom::class, 'uom_id');
    }

    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class, 'product_id');
    }

    public function batches()
    {
        return $this->hasMany(Batch::class, 'product_id', 'id');
    }

    public function clicks()
    {
        return $this->hasMany(ProductClick::class, 'product_id');
    }
    public function productClick()
    {
        return $this->hasMany(ProductClick::class, 'product_id');
    }
}
