<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CikkTorzs extends Model
{
    /** @use HasFactory<\Database\Factories\CikkTorzsFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'beszalito',
        'rovat',
        'status',
    ];
    public function beszalito()
    {
        return $this->belongsTo(Beszalito::class);
    }
}
