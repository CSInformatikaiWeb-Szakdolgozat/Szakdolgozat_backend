<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    /** @use HasFactory<\Database\Factories\ClassificationFactory> */
    use HasFactory;
    protected $fillable = [
        'upper_classification',
        'name',
    ];
    public function article()
    {
        return $this->hasMany(Article::class);
    }
    public function parentClass()
    {
        return $this->belongsTo(Classification::class, 'upper_classification');
    }

    public function subClasses()
    {
        return $this->hasMany(Classification::class, 'upper_classification');
    }
}
