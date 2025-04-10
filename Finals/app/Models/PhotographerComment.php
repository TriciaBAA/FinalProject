<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotographerComment extends Model
{
    use HasFactory;

    protected $fillable = ['photographer_id', 'name', 'comment', 'rating'];
}