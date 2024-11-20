<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'child_menu_id', 'title', 'slug', 'price', 'status', 'description', 'fitureImg','multiImg', 'sub_menu_id'
    ];

    protected $primaryKey = 'id';
    public function childmenu()
    {
        return $this->belongsTo(Childmenu::class, 'child_menu_id');
    }

    public function multiImages()
    {
        return $this->hasMany(MultiImg::class, 'product_id');
    }
}