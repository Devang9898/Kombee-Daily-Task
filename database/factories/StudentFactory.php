<?php

namespace Database\Factories;

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
    protected $model =Student::class;
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->name(),
            'password' => bcrypt('password'), // Or you can use $this->faker->password()
            'age' => $this->faker->numberBetween(10, 25),
            'marks' => $this->faker->numberBetween(0, 100),
            'grade' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
