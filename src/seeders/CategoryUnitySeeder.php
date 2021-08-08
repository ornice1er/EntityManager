<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryUnity;

class CategoryUnitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryUnity::create(['label'=>'Principal']);
        CategoryUnity::create(['label'=>'Adjoint']);
        CategoryUnity::create(['label'=>'Assistance']);
    }
}
