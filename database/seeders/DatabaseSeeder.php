<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // some user
        $user1 = User::factory()->create([
            'name' => 'Ali'
        ]);

        $user2 = User::factory()->create([
            'name' => 'Adam'
        ]);

        $user3 = User::factory()->create([
            'name' => 'John'
        ]);

        // some categories
        $category1 = Category::factory()->create([
            'name' => 'Books'
        ]);

        $category2 = Category::factory()->create([
            'name' => 'Clothes'
        ]);

        $category3 = Category::factory()->create([
            'name' => 'Furniture'
        ]);

        $category4 = Category::factory()->create([
            'name' => 'Electrical Goods'
        ]);

        // some post
        Post::factory(2)->create([
            'user_id' => $user1->id,
            'category_id' => $category1->id
        ]);

        Post::factory(2)->create([
            'user_id' => $user1->id,
            'category_id' => $category2->id
        ]);

        Post::factory(2)->create([
            'user_id' => $user2->id,
            'category_id' => $category3->id
        ]);

        Post::factory(3)->create([
            'user_id' => $user2->id,
            'category_id' => $category4->id
        ]);

        Post::factory(5)->create([
            'user_id' => $user3->id,
            'category_id' => $category4->id
        ]);
        
    }
}
