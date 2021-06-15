<?php

namespace App\Models;

use App\Models\ItemProperties;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory;

    protected $fillable = ['id','name'];

    public function ItemProperties()
    {
        return $this->hasMany(ItemProperties::class,'properties_id');
    }
}
