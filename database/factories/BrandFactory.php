<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Psy\Util\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
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
            'status' => rand(0,1),
            'description' => Str::random(30),
            'image' => 'http://localhost/niyd-ecom/public/website/img/logo/logo.png'
        ];
    }
}
