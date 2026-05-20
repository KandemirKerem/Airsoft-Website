<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Airsoft sitene özel kategoriler
        $categories = ['Elektrikli Tüfekler (AEG)', 'Gaz Geri Tepmeli (GBB)', 'Kurmalı Keskin Nişancı', 'Tabancalar', 'Taktik Ekipman & Yelek', 'Kask & Gözlük'];
        $name = $this->faker->unique()->randomElement($categories);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
