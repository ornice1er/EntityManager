<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                 \App\Models\Officer::factory(10)->create();

    }
}
