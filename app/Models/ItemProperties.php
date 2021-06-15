<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemProperties extends Model
{
    use HasFactory;
    protected $fillable = ['item_id','properties_id'];

    
    public function properties()
    {
        return $this->hasMany(Property::class,'id','properties_id');
    }
}
