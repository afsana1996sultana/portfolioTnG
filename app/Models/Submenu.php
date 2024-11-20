<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    protected $table = 'submenus'; 
    public function products()
    {
        return $this->hasMany(Product::class, 'sub_menu_id');
    }
}