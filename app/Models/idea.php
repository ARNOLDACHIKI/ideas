<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class idea extends Model
{
    protected $fillable = [
        'content',
        'like',
    ];
    use HasFactory;
}
