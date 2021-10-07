<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quote;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quote::factory()->times(50)->create();
    }
}
