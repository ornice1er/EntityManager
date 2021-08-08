<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    use HasFactory;
    protected $guarded=[];


    
    public function unity()
    {
        return $this->belongsTo(Unity::class,'unity_id');
    }
    public function currentOffices()
    {
        return $this->hasMany(CurrentOffice::class,'officer_id');
    }
    public function currentOffice()
    {
        return $this->hasOne(CurrentOffice::class,'officer_id')->where('is_active',true);
    }
    
}
