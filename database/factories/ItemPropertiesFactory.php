<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\ItemProperties;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemPropertiesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ItemProperties::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item_id' => \App\Models\Item::inRandomOrder()->first()->id,
            'properties_id' => \App\Models\Property::inRandomOrder()->first()->id,

        ];
    }
}
