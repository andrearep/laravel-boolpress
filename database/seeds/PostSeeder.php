<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            $post= new Post();
            $post->title = $faker->sentence(3);
            $post->body = $faker->text();
            $post->image = $faker->imageUrl(600,300,'Posts', true, $post->title);
            $post->save();
        }
    }
}