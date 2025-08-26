<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Student::class;
    public function definition(): array
    {
        return [
           'name'  => $this->faker->name(),
            'age'   => $this->faker->numberBetween(10, 20),
            'class' => $this->faker->randomElement(['Six', 'Seven', 'Eight', 'Nine', 'Ten']),
            'roll'  => $this->faker->unique()->numberBetween(1, 100),
        ];
    }
}
