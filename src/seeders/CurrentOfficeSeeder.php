<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CurrentOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CurrentOffice::factory(10)->create();

    }
}
