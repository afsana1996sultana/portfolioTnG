<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'heading', 'details', 'image'
    ];

    protected $primaryKey = 'id';
}
