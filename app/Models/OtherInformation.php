<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherInformation extends Model
{
    /** @use HasFactory<\Database\Factories\OtherInformationFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
    ];
}
