<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name'=> 'Pizza', 'slug' => 'pizza'],
            ['name'=> 'Cinese', 'slug' => 'cinese'],
            ['name'=> 'Italiano', 'slug' => 'italiano'],
            ['name'=> 'Giapponese', 'slug' => 'giapponese'],
            ['name'=> 'Pub', 'slug' => 'pub'],
            ['name'=> 'Panini', 'slug' => 'panini'],
            ['name'=> 'Pollo', 'slug' => 'pollo'],
            ['name'=> 'Dolci', 'slug' => 'dolci']
        ];

        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
