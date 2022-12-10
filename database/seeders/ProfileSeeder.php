<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Profile::factory(5)
            ->for(User::factory())
            ->for(Role::factory())
            ->create();

/*        Profile::factory()
            ->count(5)
            ->for(User::factory())
            ->create();


        Profile::factory()
            ->count(4)
            ->hasAttached($user)
            ->create();*/
    }
}
