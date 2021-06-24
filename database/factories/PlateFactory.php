<?php

namespace Database\Factories;

use App\Models\Plate;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->text(9),
            'description' => $this->faker->unique()->text(15),
            'price' => '10',
            'slug' => $this->faker->unique()->slug(),
            'restaurant_id' =>'1',
            'thumb_path' => 'https://via.placeholder.com/250',
        ];
    }
}
