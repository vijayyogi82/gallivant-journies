<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourdetail_gallary extends Model
{
    use HasFactory;
    protected $fillable = [
        'tourdetails_id',
        'image',
    ];
   public function tourdetail()
    {
        return $this->hasMany('App\Models\Tourdetail','tourcategory_id');
    }
}
