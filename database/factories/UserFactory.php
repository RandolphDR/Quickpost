<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'avatar' => null,
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'middlename' => fake()->optional()->lastName(),
            'age' => fake()->numberBetween(18, 65),
            'birthdate' => fake()->date(),
            'birthplace' => [
                'city' => fake()->city(),
                'country' => fake()->country(),
            ],
            'address' => [
                'street' => fake()->streetAddress(),
                'city' => fake()->city(),
                'state' => fake()->state(),
                'country' => fake()->country(),
                'zip' => fake()->postcode(),
            ],
            'bio' => fake()->text(200),
            'username' => fake()->unique()->userName(),
            'phone' => fake()->unique()->phoneNumber(),
            'phone_verified_at' => null,
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => null,
            'password' => static::$password ??= Hash::make('randolph123'),
            'account_status' => 'active',
            'suspended_until' => null,
            'active_status' => 'inactive',
        ];
    }

    public function createWithRole(int $count, string $role)
    {
        return $this->state([
            'role' => $role,
        ])->count($count);
    }
}
