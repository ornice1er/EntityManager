<?php
namespace Database\Factories;
use App\Models\Officer;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfficerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Officer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'matricule' => $this->faker->postcode(),
            'firstname' => $this->faker->name(),
            'lastname' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'birthday' => now(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->e164PhoneNumber(),
            'unity_id' => $this->faker->numberBetween(1,3)
        ];
    }
}
