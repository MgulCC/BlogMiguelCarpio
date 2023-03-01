<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(20)->create();

        User::factory(20)->create()->each(function($u){
            $u->posts()->saveMany(Post::factory(1)->make());
            $u->comments()->saveMany(Comment::factory(1)->make());
            
            
        });

    }
}
