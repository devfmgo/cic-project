<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table = 'products_detail';
    protected $fillable = [
        'product_id',
        'price',
        'description',
        'indikasi',
        'komposisi',
        'dosis',
        'aturan_pakai',
        'perhatian',
        'kontra_indikasi',
        'efek_samping',
        'kemasan',
        'nomer_registrasi',
        'url_website',
        'url_video',
        'image',
        'manufaktur',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

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
    // public function productClick()
    // {
    //     return $this->hasMany(ProductClick::class, 'product_id');
    // }
}
