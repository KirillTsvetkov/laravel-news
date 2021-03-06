<?php

namespace Database\Factories;

use App\Models\NewsTag;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NewsTag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'news_id'=>$this->faker->numberBetween(2,30),
            'tag_id'=>$this->faker->numberBetween(1,7)
        ];
    }
}
