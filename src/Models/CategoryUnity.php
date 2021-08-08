<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryUnity extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function unities()
    {
        return $this->hasMany(Unity::class,'category_unity_id');
    }
}
