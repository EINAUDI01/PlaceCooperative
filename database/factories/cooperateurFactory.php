<?php

namespace Database\Factories;

use App\Models\cooperateur;
use Illuminate\Database\Eloquent\Factories\Factory;

class cooperateurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cooperateur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->word();
        return 
        [
            //
            'name' => $name,
        ];
    }
}
