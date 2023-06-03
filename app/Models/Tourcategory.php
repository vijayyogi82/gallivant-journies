<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'Status',
        'image',
    ];
    
    
    
    public function tourdetail()
    {
        return $this->hasMany('App\Models\Tourdetail','tourcategory_id');
    }
}
