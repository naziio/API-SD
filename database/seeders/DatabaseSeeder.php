<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ItemSeeder::class,
            PropertySeeder::class,
            ItemPropertiesSeeder::class,

        ]);
        /*
         \App\Models\Item::factory(10)->create();
         \App\Models\Property::factory(10)->create();
         \App\Models\ItemProperties::factory(10)->create();
         */
        \App\Models\User::create([
            'name' => 'simple',
            'email' => 'simple@simpledelivery.com',
            'password' =>Hash::make('simple'),
         ]);


    }
}
