@extends('admin.layout.adminapp')
@section('content')
<div class="page-body">
<div class="container-fluid">
                <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                       <h3>Tour Location  List</h3>
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
	                   
                            <a class="btn btn-info " href="{{Route('tourlocation.create')}}"><i class="fa fa-plus" aria-hidden="true" > </i>Add</a>
                            
                     
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display" id="data-source-1" style="width: 100%;">
	                            <thead>
	                                <tr>
	                                    <th>Title</th>
	                                    <th>Description</th>
	                                    <th>Status</th>
	                                    <th>Action</th>
	                                </tr>
	                            </thead>
	                            <tbody>
                                @foreach($tourlocations as $tourlocation)
	                                <tr>
	                                    <td>{{$tourlocation->title}}</td>
	                                    <td>{!! $tourlocation->description !!}</td>
	                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" onclick="change_status({{$tourlocation->id}})"><span class="switch-state"></span>
                                        </label>
                                        </td>
	                                    <td>
                                           <a class="btn btn-primary" href="{{Route('tourlocation.edit',$tourlocation->id)}}" type="button">Edit</a>
                                            <a class="btn btn-danger" href="{{ url('admin/tourlocation/delete/'. $tourlocation->id) }}" type="button">Delete</a>
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

<script>
        function change_status(id){
    url = "{{ url('admin/tourlocation/update_status') }}/"+id
    $.get( url, function() {
        alert( "Status enable&disable." );
    });
}
</script>
<script>
    function destroy(id){
      url = "{{ url('admin/tourlocation/delete') }}/"+id
    $.get( url, function() {
        alert( "Tourlocation deleted." );
    });
}
</script>

@endsection