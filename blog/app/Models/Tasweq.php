<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasweq extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        
        'photo',
        'name',
        'detale',
    ];
}
