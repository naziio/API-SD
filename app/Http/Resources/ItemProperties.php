<?php

namespace App\Http\Resources;

use App\Http\Resources\Property;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemProperties extends JsonResource
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
            'properties' => Property::collection($this->properties),
        ];
    }
}
