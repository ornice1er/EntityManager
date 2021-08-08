<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        $this->call(TypeEntitySeeder::class);
        $this->call(TypeUnitySeeder::class);
        $this->call(CategoryUnitySeeder::class);
        $this->call(EntitySeeder::class);
        $this->call(UnitySeeder::class);
        $this->call(OfficerSeeder::class);
        $this->call(OfficeSeeder::class);
        $this->call(CurrentOfficeSeeder::class);
    }
}
