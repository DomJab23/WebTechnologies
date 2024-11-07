<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    //

    public function images():HasMany
    {
        return $this->hasMany(Image::class);
    }
}
