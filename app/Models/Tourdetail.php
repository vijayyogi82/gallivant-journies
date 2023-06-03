<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourdetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'tourcategory_id',
        'activitylevel',
        'groupsize',
        'image',
        'location_id',
        'overview',
        'included',
        'not_included',
    ];


    public function tourcategory()
    {
        return $this->belongsTo('App\Models\Tourcategory');
    }

    public function Tourdetail_gallary()
    {
        return $this->belongsTo('App\Models\Tourdetail_gallary');
    }

    public function Tourdetail_itinerary()
    {
        return $this->belongsTo('App\Models\Tourdetail_itinerary');
    }

    public function Tourdetail_departure()
    {
        return $this->belongsTo('App\Models\Tourdetail_departure');
    }
}
