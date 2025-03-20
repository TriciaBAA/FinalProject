<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['museum_id', 'user_id', 'comment', 'rating'];

    public function museum()
    {
        return $this->belongsTo(Museum::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
