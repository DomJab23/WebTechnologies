<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pet extends Model
{
    //

    public function images():HasMany
    {
        return $this->hasMany(Image::class);
    }
}
