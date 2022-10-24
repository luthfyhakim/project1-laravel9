<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loker>
 */
class LokerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $image = fake()
            ->randomElement($array = array(
                'loker1.png',
                'loker2.png',
                'loker3.png',
                'loker4.png'
            ));

        return [
            'nama_pekerjaan' => fake('id_ID')->jobTitle(),
            'nama_perusahaan' => fake('id_ID')->company(),
            'lokasi' => fake('id_ID')->city(),
            'gaji' => fake('id_ID')->numberBetween(3000000, 15000000),
            'gambar' => $image
        ];
    }
}
