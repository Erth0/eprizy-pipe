<?php

use App\PrizeWinners;
use Illuminate\Database\Seeder;

class PrizeWinnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PrizeWinners::class, 10)->create();
    }
}