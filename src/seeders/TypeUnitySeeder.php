<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeUnity;

class TypeUnitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeUnity::create(['label'=>'Decionnel']);
        TypeUnity::create(['label'=>'Central']);
        TypeUnity::create(['label'=>'Technique']);
        TypeUnity::create(['label'=>'Céllule']);
    }
}
