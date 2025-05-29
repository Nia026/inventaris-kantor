<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $primaryKey = 'id_item';

    protected $fillable = ['item_name', 'id_category', 'quantity', 'condition'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function itemLocation()
    {
        return $this->hasOne(ItemLocation::class, 'id_item');
    }
}