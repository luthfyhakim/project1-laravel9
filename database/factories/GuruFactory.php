<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Nama' => fake()->name(),
            'Jenis_kelamin' => 'L',
            'Alamat' => fake()->address(),
            'Mapel' => 'RPL',
            'Foto' => fake()->image(null, 640, 480, null, true, true, null, false),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
