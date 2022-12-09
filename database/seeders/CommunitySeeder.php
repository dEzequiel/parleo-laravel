<?php

namespace Database\Seeders;

use App\Models\Community;
use App\Models\Post;
use App\Models\User;
use Database\Factories\CommunityFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Community::factory()
            ->has(Post::factory(3))
            ->create();
    }
}
