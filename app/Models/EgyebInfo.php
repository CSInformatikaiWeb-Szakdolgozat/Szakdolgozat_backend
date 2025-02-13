<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EgyebInfo extends Model
{
    /** @use HasFactory<\Database\Factories\EgyebInfoFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
    ];
}
