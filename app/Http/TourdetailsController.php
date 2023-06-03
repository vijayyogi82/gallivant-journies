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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //$tourdetails = Tourdetail::all();
        $tourdetails = Tourdetail::with('tourcategory')->get();
        return view('admin.tourdetails.index', compact('tourdetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        $tourcategories =  Tourcategory::all();
        $tourdetails = Tourdetail::all();
        return view('admin.tourdetails.create', compact('tourcategories', 'tourdetails'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        echo "vijay";
        die;

        $tourdetail = new Tourdetail();
        $tourdetail = $request->all();
        $tourdetail->save();
        return redirect()->route('tourdetail.index')->with('success', 'Tourdetails created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $tourcategorys =  Tourcategory::all();
        $tourdetails = Tourdetail::find($id);
        $gallarys = Tourdetail_gallary::where('tourdetails_id', $id)->get();
        $itinerarys = Tourdetail_itinerary::where('tourdetails_id', $id)->get();
        $departures = Tourdetail_departure::where('tourdetails_id', $id)->get();
        return view('admin.tourdetails.show', compact('tourdetails', 'tourcategorys', 'gallarys', 'itinerarys', 'departures'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $tourcategorys =  Tourcategory::all();
        $tourdetails = Tourdetail::find($id);
        return view('admin.tourdetails.edit', compact('tourdetails', 'tourcategorys'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
