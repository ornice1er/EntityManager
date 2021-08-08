<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function currentOffice()
    {
        return $this->hasMany(CurrentOffice::class,'current_office_id');
    }

    
}
