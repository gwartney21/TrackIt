<?php

namespace Database\Factories;

use App\Models\jobs;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class jobsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = jobs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'JobName' => $this->faker->sentence(5),
            'jobRole' => $this->faker->text(),
            'jobLink' => $this->faker->text(),
            'jobInfo' => $this->faker->text(),
            'user_id' => User::all()->random()->id,
        ];
    }
}
