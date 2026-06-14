<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // 1. Add this line to force Laravel to use your singular table name:
    protected $table = 'category';

    // 2. Make sure 'name' is in your fillable array so it allows seeding
    protected $fillable = ['name'];
}