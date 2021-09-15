<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talab extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'serves',
        'name',
        'commerc_name',
        'mob',
        'email',
        'detale',
    ];
}
