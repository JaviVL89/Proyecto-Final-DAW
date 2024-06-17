<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    protected $model = Tag::class;

    public function definition()
    {
        $tags = [
            'JavaScript',
            'PHP',
            'Python',
            'Java',
            'C#',
            'Ruby',
            'Go',
            'Swift',
            'Kotlin',
            'R'
        ];

        return [
            'name' => $this->faker->unique()->randomElement($tags),
        ];
    }
}
