<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
     */

    public function dni(){
        $letras="TRWAGMYFPDXBNJZSQVHLCKE";
        $num=$this->faker->unique()->randomNumber(8);
        $cif = $num."-".$letras[$num%23];
        return $cif;
    }

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName(),
            'dni' => $this->dni(),
            'edad' => $this->faker->numberBetween(18, 30),
            'direccion' => $this->faker->address(),
            'email' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->numerify('6########') // Genera números que empiezan por 6 seguidos de 8 dígitos aleatorios
        ];
    }
}

