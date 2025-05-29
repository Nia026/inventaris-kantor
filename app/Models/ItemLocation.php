<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemLocation extends Model
{
    protected $fillable = ['id_item', 'id_location', 'date_added'];

    public function item()
    {
        return $this->belongsTo(Item::class, 'id_item');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'id_location');
    }
}