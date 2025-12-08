<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'email',
        'subjek',
        'message'
    ];
    protected $table = "feedback";
}
