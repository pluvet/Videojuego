<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Videojuego;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideojuegoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Videojuego::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, User::count()),
            'name' => $this->faker->name(),
            'genre' => $this->faker->name(),
            'price' => $this->faker->numberBetween(1, 500),
            'stock' => $this->faker->numberBetween(1, 100),
            'discount' => $this->faker->numberBetween(1, 30)
        ];
    }
}
