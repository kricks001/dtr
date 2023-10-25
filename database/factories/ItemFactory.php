<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => strtolower($this->faker->text(10)),
            "description" => $this->faker->paragraphs(1, true),
            "amount" => $this->faker->numberBetween(10000,90000),
            "images" => function (): string {
                $images = [];
                for ($i = 0; $i < 10; $i++) {
                    array_push($images, $this->faker->imageUrl());
                }
                return implode(",", $images);
            },
        ];
    }
}
