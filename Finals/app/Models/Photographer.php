<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    public function comments()
{
    return $this->hasMany(PhotographerComment::class);
}

}
