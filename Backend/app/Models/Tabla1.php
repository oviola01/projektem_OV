<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabla1 extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'description',
        'start_date',
        'user_id'
    ];
}
