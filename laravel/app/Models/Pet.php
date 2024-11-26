<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use ApiPlatform\Metadata\ApiResource;

#[ApiResource(extraProperties: ['rfc_7807_compliant_errors' => false])
]

class Pet extends Model
{
    //
    protected $fillable = ['name', 'age', 'species', 'status', 'volunteer_user_id'];

    public function images():HasMany
    {
        return $this->hasMany(Image::class);
    }
}
