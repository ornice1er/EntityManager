<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentOffice extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function officer()
    {
        return $this->belongsTo(Officer::class,'officer_id');
    }

    public function office()
    {
        return $this->belongsTo(Office::class,'office_id');
    }
}
