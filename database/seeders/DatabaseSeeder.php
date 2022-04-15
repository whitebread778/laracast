<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Justin'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,  
        //     'title' => 'My family Post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => '<p>Lorem ipsum dolar sit amet</p>',
        //     'body' => '<p>Lorem ipsum dolar sit amet, consectetur adipiscing elit. Morbi viverra vehicula nisl eget blandit.</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,  
        //     'title' => 'My Work Post',
        //     'slug' => 'my-second-post',
        //     'excerpt' => '<p>Lorem ipsum dolar sit amet</p>',
        //     'body' => '<p>Lorem ipsum dolar sit amet, consectetur adipiscing elit. Morbi viverra vehicula nisl eget blandit.</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,  
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-third-post',
        //     'excerpt' => '<p>Lorem ipsum dolar sit amet</p>',
        //     'body' => '<p>Lorem ipsum dolar sit amet, consectetur adipiscing elit. Morbi viverra vehicula nisl eget blandit.</p>'
        // ]);
    }
}
