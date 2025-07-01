<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      /*  return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'contact_phone' => fake()->phoneNumber(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];*/
         return [
            'name' => fake()->randomElement(['Mohamed amine', 'Fatima majidi', 'Youssef anour', 'Khadija el',"soufiane refai","mohamed bouagra",'mohssin bardaa']),
            'email' => fake()->unique()->safeEmail(),
            'contact_phone' => fake()->numerify('06########'), // Moroccan format
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // default password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
