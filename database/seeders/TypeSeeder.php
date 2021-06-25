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
            ['name'=> 'Pizza', 'slug' => 'pizza', 'thumb_path' => 'images/icons/types/pizza.jpg'],
            ['name'=> 'Cinese', 'slug' => 'cinese', 'thumb_path' => 'images/icons/types/cinese.jpg'],
            ['name'=> 'Italiano', 'slug' => 'italiano', 'thumb_path' => 'images/icons/types/italiano.jpg'],
            ['name'=> 'Giapponese', 'slug' => 'giapponese', 'thumb_path' => 'images/icons/types/giapponese.png'],
            ['name'=> 'Pub', 'slug' => 'pub', 'thumb_path' => 'images/icons/types/pub.jpg'],
            ['name'=> 'Panini', 'slug' => 'panini', 'thumb_path' => 'images/icons/types/panini.jpg'],
            ['name'=> 'Pollo', 'slug' => 'pollo', 'thumb_path' => 'images/icons/types/pollo.jpg'],
            ['name'=> 'Dolci', 'slug' => 'dolci', 'thumb_path' => 'images/icons/types/dolci.jpg'],
        ];

        foreach ($types as $type) {
            // $type_obj = new Type();
            // $type_obj->name = $type;
            // $type_obj->slug = Str::slug($type, '-');  
            // $type_obj->thumb_path = $type;  
            
            // $type_obj->save();

            Type::create($type);
        }
    }
}
