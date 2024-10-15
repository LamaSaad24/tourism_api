<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //generate random data with faker
            'fName' => $this->faker->FirstName($gender = 'male'|'female'),
            'lName' => $this->faker->LastName(),
            'plateNumber' => $this->faker->randomNumber(6, True),
            'phoneNumber' => $this->faker->e164PhoneNumber(),
            'description' => $this->faker->Paragraph()
        ];
    }
}
