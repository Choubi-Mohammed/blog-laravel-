<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Factory as Faker;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
        Post::create([
            'title' => $faker->sentence,
            'description' => $faker->paragraph,
            'image' => 'https://picsum.photos/640/480?random=' . $index,
        ]);
    }
    }
}
