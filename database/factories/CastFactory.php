<?php

namespace Database\Factories;

use App\Models\Cast;
use Illuminate\Database\Eloquent\Factories\Factory;

class CastFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cast::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'active' => random_int(0, 1)
        ];
    }
}
