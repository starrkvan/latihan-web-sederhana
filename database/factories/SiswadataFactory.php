<?php

namespace Database\Factories;

use App\Models\Siswadata;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SiswadataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Siswadata::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sekolahList = [
            'SMA Negeri 1 Yogyakarta',
            'SMA Negeri 3 Yogyakarta',
            'SMA Negeri 5 Yogyakarta',
            'SMA Negeri 1 Yogyakarta',
            'SMA Negeri 2 Yogyakarta',
        ];

        return [
            'nama' => $this->faker->name,
            'ttl' => $this->faker->date,
            'sekolah' => $this->faker->randomElement($sekolahList),
            'keterangan' => $this->faker->randomElement(['lulus', 'gagal']),
        ];
    }
}
