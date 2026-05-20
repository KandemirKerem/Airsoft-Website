<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $title = $this->faker->sentence(4); // 4 kelimelik sahte ilan başlığı

        return [
            // Laravel otomatik olarak bir user ve category üretip id'lerini buraya bağlar:
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'city' => $this->faker->randomElement(['İstanbul', 'Ankara', 'İzmir', 'Bursa', 'Antalya', 'Adana', 'Kocaeli']),
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph(3), // 3 paragraflık ilan açıklaması
            'price' => $this->faker->randomFloat(2, 500, 15000), // 500 ile 15.000 TL arası fiyat
            'image' => null, // Şimdilik boş bırakalım, frontend'de varsayılan resim koyarız
            'views' => $this->faker->numberBetween(0, 500), // 0-500 arası rastgele izlenme
            'status' => 'active',
        ];
    }
}
