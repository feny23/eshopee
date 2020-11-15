<?php

namespace Database\Factories;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaksi::class;

    public function definition()
    {
        return [
            'tanggal' =>$this->faker->dateTimeThisMonth(),
            'no_resi' => $this->faker->randomNumber()
        ];
    }
}
