@extends('admin.layout.adminapp')
@section('content')

<div class="container">
					<div class="inner-body">
						<!-- Page Header -->
						<div class="page-header">

							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Tour category List </h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Tour Category</a></li>
									<li class="breadcrumb-item active" aria-current="page">Category List</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
									<a type="button" href="{{Route('tourcategory.create')}}" class="btn btn-primary my-2 btn-icon-text">
									  <i class="fa fa-plus"></i> Add
                                    </a>
								</div>
							</div>
						</div>
						<!-- End Page Header -->
						@if($message = Session::get('success'))
							<div class="alert alert-solid-success" role="alert">
								<button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button">
								<span aria-hidden="true">&times;</span></button>
								<strong>successfully</strong> - {{$message}}.
							</div>
						@endif
						<!-- Row -->


						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-bottom" id="example1">
												<thead>
													<tr>
														<th class="wd-20p">Title</th>
														<th class="wd-25p">Description</th>
														<th class="wd-20p">Status</th>
														<th class="wd-15p">Action</th>
													</tr>
												</thead>
												<tbody>
                                                @foreach($Tourcategorys as $Tourcategory)
                                                    <tr>
                                                        <td>{{$Tourcategory->title}}</td>
                                                        <td>{!! $Tourcategory->description !!}</td>
                                                        <td>
													    @if($Tourcategory->Status == 0)
                                                        <label class="switch">
                                                            <input class="" type="checkbox" onclick="change_status({{$Tourcategory->id}})"><span class="switch-state"></span>
                                                        </label>
														@else
														<label class="switch">
                                                            <input type="checkbox" checked onclick="change_status({{$Tourcategory->id}})"><span class="switch-state"></span>
                                                        </label>
														@endif
                                                        </td>
                                                        <td>
                                                        <a class="btn btn-primary" href="{{Route('tourcategory.edit',$Tourcategory->id)}}" type="button">Edit</a>
                                                        <a class="btn btn-danger" href="{{ url('admin/tourcategory/delete/'. $Tourcategory->id) }}" type="button">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->
</div>
</div>
<script>
     function change_status(id){
    url = "{{ url('admin/tourcategory/update_status') }}/"+id
    $.get( url, function() {
        alert( "Status Enable&Disable" );
    });
}
</script>
@endsection