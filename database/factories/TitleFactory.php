<?php

namespace Database\Factories;

use App\Models\Title;
use App\Models\Category;
use App\Models\Campaign;
use Illuminate\Database\Eloquent\Factories\Factory;

class TitleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Title::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory(),
            'campaign_id' => Campaign::factory(),
            'img_mini' => "core_mini.png",
            'img_big' => "core_big.png",
            'name' => $this->faker->name(),
            'year_published' => $this->faker->year(),
            'slug' => $this->faker->slug(),
        ];
    }
}
