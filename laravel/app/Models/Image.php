<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //

    public function pet():BelongsTo
    {
        return $this->belongsTo(Pet::class);
    }
}
