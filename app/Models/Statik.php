<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statik extends Model
{
    use HasFactory;

    protected $fillable = [
        'halaman','body','image'
    ];
}
