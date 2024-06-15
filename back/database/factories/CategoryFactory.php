<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        $categories = [
            'Frontend',
            'Backend',
            'Full Stack',
            'Data Science',
            'Machine Learning',
            'DevOps',
            'Mobile Development',
            'Cybersecurity',
            'UI/UX Design',
            'Cloud Computing'
        ];

        return [
            'name' => $this->faker->unique()->randomElement($categories),
            'description' => $this->faker->sentence(),
        ];
    }
}
