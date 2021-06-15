<?php

namespace Database\Seeders;

use App\Models\ItemProperties;
use Illuminate\Database\Seeder;

class ItemPropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItemProperties::create([
            'item_id' =>rand(1,5),
            'properties_id' => rand(1,5)
        ]);
        ItemProperties::create([
            'item_id' =>rand(1,5),
            'properties_id' => rand(1,5)
        ]);
        ItemProperties::create([
            'item_id' =>rand(1,5),
            'properties_id' => rand(1,5)
        ]);
        ItemProperties::create([
            'item_id' =>rand(1,5),
            'properties_id' => rand(1,5)
        ]);
        ItemProperties::create([
            'item_id' =>rand(1,5),
            'properties_id' => rand(1,5)
        ]);
    }
}
