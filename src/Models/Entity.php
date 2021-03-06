<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    public function typeEntity()
    {
        return $this->belongsTo(TypeEntity::class,'type_entity_id');
    }
    public function unities()
    {
        return $this->hasMany(Unity::class,'entity_id');
    }
}
