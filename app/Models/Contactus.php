<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'heading', 'details', 'address', 'email', 'phone', 'google_map'
    ];

    protected $primaryKey = 'id';
}
