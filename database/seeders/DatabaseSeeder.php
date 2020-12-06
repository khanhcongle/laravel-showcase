<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        // create new model and save imediately to db
        User::factory()->count(20)->create();

        // massively fill properties
        (new Category([
            Category::$SLUG => 'featured', Category::$NAME => 'Featured Sites'
        ]))->save();

        (new Category([
            Category::$SLUG => 'links', Category::$NAME => 'Useful Links'
        ]))->save();

        (new Category([
            Category::$SLUG => 'tutorials', Category::$NAME => 'Guides & Tutorials'
        ]))->save();

        Post::factory()->count(20)->create();

    }
}
