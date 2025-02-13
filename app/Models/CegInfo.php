<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CegInfo extends Model
{
    /** @use HasFactory<\Database\Factories\CegInfoFactory> */
    use HasFactory;
    protected $fillable = [
        'description',
    ];
}
