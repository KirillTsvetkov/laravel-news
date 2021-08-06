<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'News '.$this->faker->sentence($nbWords = 10, $variableNbWords = true) ,
            'body' => $this->faker->text,
            'summary' => $this->faker->text,
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'city_id' => $this->faker->numberBetween(1,3)
            
        ];
    }
}
