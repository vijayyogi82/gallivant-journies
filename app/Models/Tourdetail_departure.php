<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourdetail_departure extends Model
{

    use HasFactory;

    protected $fillable = [
        'tourdetails_id',
        'departure_date',
        'price',
        'seats',
    ];

   public function tourdetail()
    {
        return $this->hasMany('App\Models\Tourdetail','tourcategory_id');
    }

}

