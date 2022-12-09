<?php

namespace Database\Factories;

use App\Models\Community;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Community>
 */

/**
 * Factory is a helper function. It is also a global object. The Factory is used to create Fake or Test data by using
 * the Model. It uses a Faker class to generate dummy data. Factory can also generate relationship data with the Model
 * which seeder can’t do.
 */
class CommunityFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Community::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->sentence(5),
        ];
    }
}
