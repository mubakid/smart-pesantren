<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'user_id' => User::factory(),
            'nik' => $this->faker->word(),
            'nis' => rand(222222, 999999),
            'tanggal_lahir' => $this->faker->word(),
            'tempat_lahir' => $this->faker->word(),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),

            // alamat rumah
            'alamat' => $this->faker->name(),
            'rtrw' => $this->faker->name(),
            'desa' => $this->faker->streetName(),
            'kota' => $this->faker->city(),
            'kecamatan' => $this->faker->city(),
            'provinsi' => $this->faker->city(),
            'kode_pos' => $this->faker->name(),
            'madin_education_id' => rand(1, 9),
            'formal_education_id' => rand(1, 9),
            'dormitory_id' => rand(1, 9),
            'room' => rand(1, 9),
        ];
    }
}
