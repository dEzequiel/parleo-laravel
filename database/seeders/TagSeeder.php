<?php

namespace Database\Seeders;

use Database\Factories\TagFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factory = new TagFactory();
        $factory
            ->count(7)
            ->create();
    }
}
