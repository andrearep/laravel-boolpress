<?php

use App\Post;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) { 
           $post = new Post();
           $post->title = $faker->sentence(5);
           $post->subTitle = $faker->sentence(12);
           $post->body = $faker->paragraph(7);
           $post->argument = $faker->randomElement(['Economia', 'Salute', 'Attutalità', 'Politica']);
           $post->author = $faker->userName();
            $post->img = $faker->imageUrl(640, 480, 'Post', true, $post->title);
            $post->save();

        }
    }
}