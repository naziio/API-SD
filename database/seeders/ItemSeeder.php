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
            'name' => 'Pizza 1',
            'price' => 100
        ]);

        Item::create([
            'name' => 'Pizza 2',
            'price' => 100

        ]);

        Item::create([
            'name' => 'Pizza 3',
            'price' => 200

        ]);

        Item::create([
            'name' => 'Pizza 4',
            'price' => 400

        ]);

        Item::create([
            'name' => 'Pizza 5',
            'price' => 600
        ]);
    }
}
