<?php

namespace Database\Seeders;

use App\Models\Community;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()
            ->count(2)
            ->for(User::factory())
            ->for(Community::factory())
            ->create();
    }
}
