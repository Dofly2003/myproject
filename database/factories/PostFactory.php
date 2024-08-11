<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User; // Pastikan untuk mengimpor model User

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(5),
            'user_id' => User::factory(), // Menggunakan factory User untuk memastikan user_id valid dan mengambil dari model
            'kategori_id' => Kategori::factory(), // Menggunakan factory kategori untuk memastikan kategori_id valid dan mengambil dari model
            'slug' => Str::slug(fake()->sentence()),
            'type' => fake()->sentence(),
            'image' => fake()->sentence(),
            'harga' => fake()->randomFloat(1, 20, 30)
        ];
    }
}
