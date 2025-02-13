<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beszalito extends Model
{
    /** @use HasFactory<\Database\Factories\BeszalitoFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'page',
    ];
}
