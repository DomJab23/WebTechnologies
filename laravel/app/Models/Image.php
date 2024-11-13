<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    //

    public function pet():BelongsTo
    {
        return $this->belongsTo(Pet::class);
    }
}
