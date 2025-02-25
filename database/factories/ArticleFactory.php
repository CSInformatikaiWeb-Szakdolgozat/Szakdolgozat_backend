<?php

namespace Database\Factories;

use App\Models\Classification;
use App\Models\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->sentence(45),
            'partner_id' => Partner::all()->random()->id, // partner_id-t használunk
            'classification' => rand(1, 7),
            'visibility_status' => 0,
            'page_link' => '/' . fake()->sentence(10),
            'visible' => 1, // kezdeti láthatóság
        ];
    }
}
