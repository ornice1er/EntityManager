<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeUnity extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function entities()
    {
        return $this->hasMany(Unity::class,'type_unity_id');
    }
}
