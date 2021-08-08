<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeEntity extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function entities()
    {
        return $this->hasMany('\App\Models\Entity','type_entity_id');
    }
}
