<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unity extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function typeUnity()
    {
        return $this->belongsTo(TypeUnity::class,'type_unity_id');
    }

    public function categoryUnity()
    {
        return $this->belongsTo(CategoryUnity::class,'category_unity_id');
    }

    public function entity()
    {
        return $this->belongsTo('\App\Models\Entity','entity_id');
    }

    public function officers()
    {
        return $this->hasMany(Officer::class,'unity_id');
    }
}
