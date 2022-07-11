<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Category::create([
            'name' => 'Olahraga',
        ]);
        Category::create([
            'name' => 'Kesehatan',
        ]);
        User::create([
            'name' => 'bayu',
            'email' => 'bayu@gmail.com',
            'password' => bcrypt('12345')
        ]);
        Blog::create([
            'title' => 'olahraga indonesia maju',
            'category_id' => 1,
            'user_id' => 1,
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum ut eos explicabo quas odit tempora possimus nesciunt, cum repellat! Cum, libero cupiditate. Pariatur consequuntur dolorem, odit aliquam mollitia libero neque?'
        ]);
        Blog::create([
            'title' => 'bayern nnnnn',
            'category_id' => 2,
            'user_id' => 1,
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum ut eos explicabo quas odit tempora possimus nesciunt, cum repellat! Cum, libero cupiditate. Pariatur consequuntur dolorem, odit aliquam mollitia libero neque?'
        ]);
    }
}