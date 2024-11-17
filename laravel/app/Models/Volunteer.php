<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Volunteer extends Model
{
    use HasFactory;

    protected $fillable = ['phone_number', 'email', 'name', 'more_about'];

    public function opportunities()
    {
        return $this->belongsToMany(VolOpportunity::class, 'part_of', 'volunteer_id', 'opportunity_id');
    }
}
