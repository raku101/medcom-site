<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // أضف هذه الخاصية للسماح بالتعبئة الجماعية
    protected $fillable = ['name', 'initial', 'rating', 'comment'];
}
