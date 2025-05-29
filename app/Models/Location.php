<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $primaryKey = 'id_location';

    protected $fillable = ['location'];

    public function itemLocations()
    {
        return $this->hasMany(ItemLocation::class, 'id_location');
    }
}