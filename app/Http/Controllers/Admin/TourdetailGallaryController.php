<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tourdetail_gallary;
use Illuminate\Http\Request;

class TourdetailGallaryController extends Controller
{
    public function tourdetailGallery(Request $request)
    {
        // $files = [];
        // if($request->hasfile('images'))
        //  {
        //     foreach($request->file('images') as $key=>$file)
        //     {
        //         $name = time().rand(1,100).'.'.$file->extension();
        //         $file->move(public_path('storage/tourdetai'), $name);  
        //         $files[$key] = $name;  
        //     }
        //  }
  
         
        // foreach($request->file('images') as $key=>$file){
        //     $file= new Tourdetail_gallary();
        //     $file->images = $files[$key];
        //     $file->save();
        //  }
        return redirect()->route('tourdetail.index')->with('success', 'Tourdetails created successfully');
    }

   
}
