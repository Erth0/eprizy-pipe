<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EprizyTokensSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PrizeSeeder::class);
        $this->call(PrizeWinnersSeeder::class);
    }
}