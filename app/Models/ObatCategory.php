<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObatCategory extends Model
{
    protected $table = 'obat_categories';
    protected $fillable = [
        'obat_category_name',
        'slug'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'obat_category_id');
    }
}
