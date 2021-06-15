<?php

namespace App\Http\Controllers\Api;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\ItemProperties;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemPropertiesRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\ItemProperties as ResourceItemProperties;

class ItemPropertiesController extends Controller
{
    /**
     * Post a Item with a property
     * @bodyParam item_id integer
     * @bodyParam properties_id integer
     */
    public function store(ItemPropertiesRequest $request)
   {
       $itemProperties = ItemProperties::create($request->all());
       return new ResourceItemProperties($itemProperties);
   }

   /**
    * Update a item and property
     * @bodyParam item_id integer
     * @bodyParam properties_id integer
    */
   public function update(ItemProperties $itemProperties, Request $request)
   {
       $itemProperties->update($request->all());
       return  new ResourceItemProperties($itemProperties);
   }

   /**
    * Delete a item and property
    */
   public function destroy(ItemPropertiesRequest $itemProperties)
   {
       $itemProperties->delete();
       return response(null, Response::HTTP_NO_CONTENT);
   }
}
