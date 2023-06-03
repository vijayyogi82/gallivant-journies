<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    

    public function dashboard(Request $request){

        $title ='abc';
        return view('admin.dashboard',compact('title'));
    }
}
