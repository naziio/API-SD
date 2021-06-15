<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'name' => 'Pizza 1'
        ]);

        Item::create([
            'name' => 'Pizza 2'
        ]);

        Item::create([
            'name' => 'Pizza 3'
        ]);

        Item::create([
            'name' => 'Pizza 4'
        ]);

        Item::create([
            'name' => 'Pizza 5'
        ]);
    }
}
