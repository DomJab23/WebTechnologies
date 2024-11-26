<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use ApiPlatform\Metadata\ApiResource;

#[ApiResource(extraProperties: ['rfc_7807_compliant_errors' => false])
]

class Image extends Model
{
    protected $fillable = ['images', 'path', 'pet_id', 'created_at', 'updated_at'];

    // Define relationships, e.g., images
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
