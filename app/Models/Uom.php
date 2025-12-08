<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uom extends Model
{
    protected $table = 'uoms';
    protected $fillable = [
        'uom_name',
        'uom_code',
        'uom_type',
        'uom_description',
    ];
    public function product()
    {
        return $this->hasMany(Product::class, 'uom_id', 'uom_id');
    }
}
