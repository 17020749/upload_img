<?php

namespace Database\Factories\Db;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'fullName' => $this->faker->name(),
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'date' =>$this->faker->date(),
           'class' => $this->faker->randomElement(['CA', 'CB','CC', 'CD', 'CE', 'CF']),
           'department' => $this->faker->randomElement(['CNTT', 'HKVT','TTNT', 'KHMT', 'HTTT', 'MTT&TT']),
            'course' => $this->faker->randomElement(['K60','K61','K62','K63','K64','K65','K66','K67']),
        ];
    }
}
