<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Childmenu extends Model
{
    protected $table = 'childmenus'; // If your table name is different, adjust accordingly
    public function submenu()
    {
        return $this->belongsTo(Submenu::class, 'submenu_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'child_menu_id');
    }
}