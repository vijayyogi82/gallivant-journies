<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tourdetail;
use App\Models\Tourcategory;
use App\Models\Tourdetail_itinerary;
use App\Models\Tourdetail_gallary;
use App\Models\Tourdetail_departure;

class TourdetailsController extends Controller
{

    public function index()
    {
        $tourdetails = Tourdetail::with('tourcategory')->latest()->get();
        return view('admin.tourdetails.index', compact('tourdetails'));
    }

    public function create()
    {
        $tourcategories =  Tourcategory::all();
        $tourdetails = Tourdetail::all();
        return view('admin.tourdetails.create', compact('tourcategories', 'tourdetails'));
    }

    public function store(Request $request)
    {
        // return $request->all();
        

        // tourdetail
        $tourdetail = new Tourdetail();
        $tourdetail->title = $request->title;
        $tourdetail->price = $request->price;
        $tourdetail->activitylevel = $request->activitylevel;
        $tourdetail->tourcategory_id = $request->tourcategory_id;
        $tourdetail->groupsize = $request->groupsize;
        // overview insert with Tourdetail
        $tourdetail->overview = $request->overview;
        $tourdetail->included = $request->included;
        $tourdetail->not_included = $request->not_included;
        $tourdetail->save();

        // itinerary
        $itinerary= new Tourdetail_itinerary;
        $itinerary->days = $request->days;
        $itinerary->description = $request->description;
        $itinerary->tourdetails_id = $tourdetail->tourdetails_id;
        $tourdetail->save();
        

        // gallary
        $files = [];
        if($request->hasfile('images'))
         {
            foreach($request->file('images') as $key=>$file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('storage/tourdetai'), $name);  
                $files[$key] = $name;  
            }
         }
  
         
        foreach($request->file('images') as $key=>$file){
            $file= new Tourdetail_gallary();
            $file->images = $files[$key];
            $file->save();
         }

        // tour depart
        if (!empty($request->departure_date)) {
            foreach ($request->departure_date as $key => $departure_date) {
                $Departure  = new Tourdetail_departure();
                $Departure->departure_date = $request->departure_date;
                $Departure->price = $request->price;
                $Departure->seats = $request->seats;
                $Departure->tourdetails_id = $tourdetail->id;
                $Departure->save();
            }
        }

        return redirect()->route('tourdetail.index')->with('success', 'Tourdetails created successfully');
    }

    public function show($id)
    {
        $tourcategorys =  Tourcategory::all();
        $tourdetails = Tourdetail::find($id);
        $gallarys = Tourdetail_gallary::where('tourdetails_id', $id)->get();
        $itinerarys = Tourdetail_itinerary::where('tourdetails_id', $id)->get();
        $departures = Tourdetail_departure::where('tourdetails_id', $id)->get();
        return view('admin.tourdetails.show', compact('tourdetails', 'tourcategorys', 'gallarys', 'itinerarys', 'departures'));
    }

    public function edit($id)
    {
        $tourcategorys =  Tourcategory::all();
        $tourdetails = Tourdetail::find($id);
        return view('admin.tourdetails.edit', compact('tourdetails', 'tourcategorys'));
    }

    public function update(Request $request, $id)
    {
        $tourdetail = Tourdetail::find($id);
        $tourdetail->title = $request->title;
        $tourdetail->price = $request->price;
        $tourdetail->activitylevel = $request->activitylevel;
        $tourdetail->tourcategory_id = $request->tourcategory_id;
        $tourdetail->groupsize = $request->groupsize;
        $tourdetail->location = $request->location;
        $tourdetail->overview = $request->overview;
        $tourdetail->included = $request->included;
        $tourdetail->notincluded = $request->notincluded;
        $tourdetail->update();
        return redirect()->route('tourdetail.index')->with('success', 'Tourdetails updated successfully');
    }

    public function delete($id)
    {
        $tourdetails = Tourdetail::where('id', $id)->delete();
        return redirect()->route('tourdetail.index')->with('success', 'Tour details deleted successfully');
    }


    public function tourdetail_image(Request $request)
    {
        if (!empty($request->images)) {
            $files = [];
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $key => $file) {
                    $name = time() . rand(1, 100) . '.' . $file->extension();
                    $file->move(public_path('storage/tourdetai'), $name);
                    $files[$key] = $name;
                }
            }
            foreach ($request->images as $key => $file) {
                $image  = new Tourdetail_gallary();
                $image->image = $files[$key];
                $image->tourdetails_id = 1;
                $image->save();
            }
        }
    }
}
