<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Usthenet\EntityManager\Models\Entity;
use Illuminate\Support\Str;
class EntitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Entity::create(['name'=>'Ministère du Travail et de la Fonction Publique','slug'=>Str::slug('Ministère du Travail et de la Fonction Publique'),'sigle'=>'MTFP','type_entity_id'=>1]);

    }
}
