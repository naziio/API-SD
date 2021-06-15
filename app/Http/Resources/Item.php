<?php

namespace App\Http\Resources;

use App\Http\Resources\ItemProperties;
use Illuminate\Http\Resources\Json\JsonResource;

class Item extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            "ItemProperties" => ItemProperties::collection($this->itemProperties),
            
            //'propierties' => $this->itemsProperties            

        ];
    }
}