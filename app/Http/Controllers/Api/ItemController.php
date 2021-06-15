<?php

namespace App\Http\Controllers\Api;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreItemRequest;
use App\Http\Resources\Item as ResourcesItem;
use Symfony\Component\HttpFoundation\Response;

class ItemController extends Controller
{

    /**
     * Items
     * 
     * List all the Items
     * 
     */
   public function index()
   {
       $items = Item::with('itemProperties.properties')->get();
       //return $items;
       return ResourcesItem::collection($items);
   }

   /**
    * Show a single Item
    */
   public function show(Item $item)
   {

    return new ResourcesItem($item);
   }

   /**
    * Post a Item
    * Store a item in the database
    * @bodyParam name string
    * @bodyParam price integer
    
    */

   public function store(StoreItemRequest $request)
   {
       $item = Item::create($request->all());
       return new ResourcesItem($item);
   }

   /**
    *Update a Item
    * 
    * @bodyParam name string  
    */
   public function update(Item $item, StoreItemRequest $request)
   {
       $item->update($request->all());
       return  new ResourcesItem($item);
   }

   /**
    * Delete a item

    */
   public function destroy(Item $item)
   {
       $item->delete();
       return response(null, Response::HTTP_NO_CONTENT);
   }
}
