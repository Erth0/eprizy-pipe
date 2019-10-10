<?php

use App\EprizyTokens;
use Illuminate\Database\Seeder;

class EprizyTokensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(EprizyTokens::class, 10)->create();
    }
}