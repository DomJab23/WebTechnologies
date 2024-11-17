<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VolOpportunity extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function volunteers()
    {
        return $this->belongsToMany(Volunteer::class, 'part_of', 'opportunity_id', 'volunteer_id');
    }
}
