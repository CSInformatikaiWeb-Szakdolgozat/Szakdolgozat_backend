<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'partner',
        'classification',
        'content',
        'visibility_status',
        'page_link',
    ];
    public function partner()
    {
        return $this->hasOne(Partner::class);
    }
    public function classification()
    {
        return $this->hasOne(Classification::class);
    }
}
