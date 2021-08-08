<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeEntity;
class TypeEntitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeEntity::create(['label'=>'Ministère']);
        TypeEntity::create(['label'=>'Institution']);

    }
}
