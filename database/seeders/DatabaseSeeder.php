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
        $books = Category::factory()->create([
            'name' => 'Books',
            'slug' => 'books'
        ]);

        $clothes = Category::factory()->create([
            'name' => 'Clothes',
            'slug' => 'clothes'
        ]);

        $furniture = Category::factory()->create([
            'name' => 'Furniture',
            'slug' => 'furniture'
        ]);

        $electrical_goods = Category::factory()->create([
            'name' => 'Electrical Goods',
            'slug' => 'electrical-goods'
        ]);

        // some post
        Post::factory(1)->create([
            'title' => 'Electrical engineering',
            'user_id' => $user1->id,
            'category_id' => $books->id
        ]);

        Post::factory(1)->create([
            'title' => 'Math theory',
            'user_id' => $user1->id,
            'category_id' => $books->id
        ]);

        Post::factory(1)->create([
            'title' => 'White shirt',
            'user_id' => $user1->id,
            'category_id' => $clothes->id
        ]);

        Post::factory(1)->create([
            'title' => 'Jeans',
            'user_id' => $user1->id,
            'category_id' => $clothes->id
        ]);

        Post::factory(1)->create([
            'title' => 'Table',
            'user_id' => $user2->id,
            'category_id' => $furniture->id
        ]);

        Post::factory(1)->create([
            'title' => 'Chair',
            'user_id' => $user2->id,
            'category_id' => $furniture->id
        ]);

        Post::factory(1)->create([
            'title' => 'Mouse',
            'user_id' => $user2->id,
            'category_id' => $electrical_goods->id
        ]);

        Post::factory(1)->create([
            'title' => 'Keyboard',
            'user_id' => $user2->id,
            'category_id' => $electrical_goods->id
        ]);

        Post::factory(1)->create([
            'title' => 'Monitor',
            'user_id' => $user3->id,
            'category_id' => $electrical_goods->id
        ]);

        Post::factory(1)->create([
            'title' => 'MousePad',
            'user_id' => $user3->id,
            'category_id' => $electrical_goods->id
        ]);
    }
}
