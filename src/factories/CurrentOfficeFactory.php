<?php

namespace Database\Factories;
use App\Models\CurrentOffice;
use Illuminate\Database\Eloquent\Factories\Factory;

class CurrentOfficeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CurrentOffice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
         
            'office_id' => $this->faker->numberBetween(1,10),
            'officer_id' => $this->faker->numberBetween(1,10)
        ];
    }
}
