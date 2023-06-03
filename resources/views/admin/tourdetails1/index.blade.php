@extends('admin.layout.adminapp')
@section('content')
<div class="page-body">
<div class="container-fluid">
                <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                       <h3>Tour Detail List</h3>
                    </div>
                    
                </div>
                </div>
            </div>	
    <div class="container-fluid">
        <div class="row">
             <!-- HTML (DOM) sourced data  Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                       <a class="btn btn-info " href="{{Route('tourdetail.create')}}"><i class="fa fa-plus" aria-hidden="true"></i>Add</a>
                            
                     
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display" id="data-source-1" style="width: 100%;">
	                            <thead>
	                                <tr>
	                                    <th>Title</th>
	                                    <th>Price</th>
	                                    <th>Vacation Style</th>
	                                    <th>Activity Level</th>
                                        <th>Group Size</th>
                                        <th>Location</th>
                                        <th>Action</th>
	                                </tr>
	                            </thead>
	                            <tbody>
                                    @foreach($tourdetails as $tourdetail)
	                                <tr>
	                                    <td>{{$tourdetail->title}}</td>
	                                    <td>{{$tourdetail->price}}</td>
	                                    <td>{{$tourdetail->tourcategory->title ?? 'None' }}</td>
                                        <td>{{$tourdetail->activitylevel}}</td>
                                        <td>{{$tourdetail->groupsize}}</td>
                                        <td>{{$tourdetail->location}}</td>
                                        
                                        </td>
	                                    <td>
                                           <a class="btn btn-primary" href="{{Route('tourdetail.edit',$tourdetail->id)}}" type="button">Edit</a>

                                         
                                          <a class="btn btn-danger" href="{{ url('admin/tourdetail/delete/'. $tourdetail->id) }}" type="button">Delete</a>
                                        
                                        </td>
	                                </tr>
                                           
                                        </td>
	                                </tr>
                                    @endforeach
                                
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- HTML (DOM) sourced data  Ends-->
        </div>

    </div>




@endsection