<?php

namespace Database\Factories;

use App\Enums\AdminStatusEnum;
use App\Models\AdminPanelSetting;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'username' => fake()->unique()->userName(),
            'password' => 'password', // password
            'status' => fake()->randomElement([AdminStatusEnum::Active->value, AdminStatusEnum::Inactive->value]),
            'com_code' => AdminPanelSetting::all()->random()->id,

        ];
    }
}