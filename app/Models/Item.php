<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function itemProperties()
    {
        return $this->hasMany(ItemProperties::class,'item_id');
    }
}
