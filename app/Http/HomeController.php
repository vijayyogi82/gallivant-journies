<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tourcategory;
use App\Models\Tourlocation;
use App\Models\Tourdetail;
use App\Models\Tourdetail_itinerary;
use App\Models\Tourdetail_gallary;
use App\Models\Tourdetail_departure;
use APP\Models\User;

class HomeController extends Controller
{
    public function index()

    {

        $title = "Gallivant Journeys";

        $Tourcategorys =  Tourcategory::where('Status', 1)->get();

        $Tourlocations =  Tourlocation::where('Status', 1)->get();

        $popular_tours = Tourdetail::with('Tourcategory')->where('is_popular', 1)->limit(6)->get();



        $popular_tours_tows = Tourdetail::where('is_featured', 1)->limit(2)->get();

        $top_adventures = Tourdetail::where('is_top_adventures', 1)->limit(6)->get();

        return view('user.index', compact('title', 'Tourcategorys', 'Tourlocations', 'popular_tours', 'popular_tours_tows', 'top_adventures'));
    }

    public function tour_detail($category_name, $tour_name, $id)
    {



        $tourdetail_id = base64_decode($id);

        $category = str_replace('-', ' ', trim($category_name));

        $tour  = str_replace('-', ' ', trim($tour_name));





        $tour_detail = Tourdetail::with('Tourcategory')->where('id', $tourdetail_id)->first();

        $Tourdetail_itinerarys =  Tourdetail_itinerary::where('tourdetails_id', $tourdetail_id)->get();

        $Tourdetail_gallarys =  Tourdetail_gallary::where('tourdetails_id', $tourdetail_id)->get();

        $Tourdetail_departures =  Tourdetail_departure::where('tourdetails_id', $tourdetail_id)->get();

        $Tourdetail_gallary_itinerarys = Tourdetail_gallary::where('tourdetails_id', $tourdetail_id)->limit(2)->get();



        return view('user.tour_detail', compact('tour_detail', 'Tourdetail_itinerarys', 'Tourdetail_gallarys', 'Tourdetail_departures', 'category', 'tour', 'Tourdetail_gallary_itinerarys'));
    }



    public function tour_listing()
    {



        $tour_listings = Tourdetail::with('Tourcategory')->get();

        return  view('user.tour_listing', compact('tour_listings'));
    }



    public function login()
    {

        //$login = Login::with('Login')->get() 

        // ,compact('$login');

        return view('user.login');
    }
}
