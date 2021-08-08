<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unity;
use Illuminate\Support\Str;
class UnitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unity::create(['name'=>'Direction de l\'Administration et des Finances','slug'=>Str::slug('Direction de l\'Administration et des Finances'),'sigle'=>'DAF','entity_id'=>1,'category_unity_id'=>1,'type_unity_id'=>2]);
        Unity::create(['name'=>'Direction de la Programmation et de la Prospective','slug'=>Str::slug('Direction de la Programmation et de la Prospective'),'sigle'=>'DPP','entity_id'=>1,'category_unity_id'=>1,'type_unity_id'=>2]);
        Unity::create(['name'=>'Direction des Services de l\'Information','slug'=>Str::slug('Direction des Services de l\'Information'),'sigle'=>'DSI','entity_id'=>1,'category_unity_id'=>1,'type_unity_id'=>2]);
        
    }
}
