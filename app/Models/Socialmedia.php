<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socialmedia extends Model
{
    use HasFactory;
    protected $fillable = [
        'platform_name',
        'platform_url',
            
    ];
    public $table = 'socialmedias';


}
