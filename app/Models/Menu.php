<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /** @use HasFactory<\Database\Factories\MenuFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'level',
        'main_menu',
        'link',
        'status'
    ];
    public function parentMenu()
    {
        return $this->belongsTo(Menu::class, 'main_menu');
    }

    public function subMenus()
    {
        return $this->hasMany(Menu::class, 'main_menu');
    }
}
