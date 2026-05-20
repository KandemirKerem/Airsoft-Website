<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Listing;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Önce sabit 6 tane kategorimizi oluşturalım
        $categories = Category::factory(6)->create();

        // 2. 10 tane sahte kullanıcı oluşturalım
        $users = User::factory(10)->create();

        // 3. Bu var olan kullanıcılar ve kategoriler üzerinden ilanlar uçuralım
        // (Böylece herkes birbirinin ilanını ve kategorisini görebilecek, çorba olmayacak)
        foreach ($users as $user) {
            // Her kullanıcı rastgele 2-4 tane ilan yüklesin
            Listing::factory(rand(2, 4))->create([
                'user_id' => $user->id,
                'category_id' => $categories->random()->id, // Var olan 6 kategoriden rastgele seçer
            ]);

            // Her kullanıcı toplulukta 2 tane tweet (post) paylaşsın
            $posts = Post::factory(2)->create([
                'user_id' => $user->id,
            ]);

            // Paylaşılan bu tweet'lere de diğer kullanıcılar rastgele yorumlar atsın
            foreach ($posts as $post) {
                Comment::factory(rand(1, 3))->create([
                    'post_id' => $post->id,
                    'user_id' => $users->random()->id, // Diğer rastgele bir kullanıcı yorum atıyor
                ]);
            }
        }
    }
}
