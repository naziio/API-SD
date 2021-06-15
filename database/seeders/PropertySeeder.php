<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Property::create([
            'name' => 'Vegan 1'
        ]);
        Property::create([
            'name' => 'Vegan 2'
        ]);
        Property::create([
            'name' => 'Vegan 3'
        ]);
        Property::create([
            'name' => 'Vegan 4'
        ]);
        Property::create([
            'name' => 'Vegan 5'
        ]);
    }
}
