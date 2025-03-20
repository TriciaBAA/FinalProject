<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['museum_id', 'image_path', 'description'];

    public function museum()
    {
        return $this->belongsTo(Museum::class);
    }
}
