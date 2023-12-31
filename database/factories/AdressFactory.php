<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use App\Models\Adress;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AdressFactory extends Factory
{
    protected $model = Adress::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'image' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'active' => $this->faker->boolean(),

            'user_id' => User::factory(),
        ];
    }
}
