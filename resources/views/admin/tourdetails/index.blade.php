@extends('admin.layout.adminapp')
@section('content')
<div class="container">
	<div class="inner-body">
		<!-- Page Header -->
		<div class="page-header">
			<div>
				<h2 class="main-content-title tx-24 mg-b-5">Tour Detail List </h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Tour Detail</a></li>
					<li class="breadcrumb-item active" aria-current="page"> Detail List</li>
				</ol>
			</div>
			<div class="d-flex">
				<div class="justify-content-center">
					<a type="button" href="{{Route('tourdetail.create')}}" class="btn btn-primary my-2 btn-icon-text">
						<i class="fa fa-plus"></i> Add
					</a>
				</div>
			</div>
		</div>
		<!-- End Page Header -->
		<!-- Row -->
		<div class="row row-sm">
			<div class="col-lg-12">
				<div class="card custom-card  ">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered border-bottom" id="example1">
								<thead>
									<tr>
										<th class="wd-20p">Title</th>
										<th class="wd-25p">Price</th>
										<th class="wd-20p">Vacation <br> Style</th>
										<th class="wd-20p">Activity <br> Level</th>
										<th class="wd-20p">Group <br> Size</th>
										<th class="wd-20p">Location</th>
										<th class="wd-15p">Popular</th>
										<th class="wd-15p">Top <br> advertures</th>
										<th class="wd-15p">Featured</th>
										<th class="wd-15p">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($tourdetails as $tourdetail)
									<tr>
										<td>{{ Str::limit($tourdetail->title, 5) }}</td>
										<td>{{$tourdetail->price}}</td>
										<td>{{$tourdetail->tourcategory->title ?? 'None' }}</td>
										<td>{{$tourdetail->activitylevel}}</td>
										<td>{{$tourdetail->groupsize}}</td>
										<td>{{$tourdetail->tourlocations->titile ?? 'None' }}</td>
										<td>
											@if($tourdetail->is_popular == 0)
											<label class="switch">
												<input type="checkbox" onclick="change_status_popular({{$tourdetail->id}})"><span class="switch-state"></span>
											</label>
											@else
											<label class="switch">
												<input type="checkbox" checked onclick="change_status_popular({{$tourdetail->id}})"><span class="switch-state"></span>
											</label>
											@endif
										</td>
										<td>
											@if($tourdetail->is_top_adventures == 0)
											<label class="switch">
												<input type="checkbox" onclick="change_status_adventures({{$tourdetail->id}})"><span class="switch-state"></span>
											</label>
											@else
											<label class="switch">
												<input type="checkbox" checked onclick="change_status_adventures({{$tourdetail->id}})"><span class="switch-state"></span>
											</label>
											@endif
										</td>
										<td>
											@if($tourdetail->is_featured == 0)
											<label class="switch">
												<input type="checkbox" onclick="change_status_featured({{$tourdetail->id}})"><span class="switch-state"></span>
											</label>
											@else
											<label class="switch">
												<input type="checkbox" checked onclick="change_status_featured({{$tourdetail->id}})"><span class="switch-state"></span>
											</label>
											@endif
										</td>
										<td>
											<a class="btn btn-primary" href="{{Route('tourdetail.show',$tourdetail->id)}}" type="button"><i class="fa fa-eye"></i></a>
											<a class="btn btn-primary" href="{{Route('tourdetail.edit',$tourdetail->id)}}" type="button"><i class='fas fa-edit'></i></a>
											<a class="btn btn-danger" href="{{ url('admin/tourdetail/delete/'. $tourdetail->id) }}" type="button"><i class="fa fa-trash"></i></a>
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

<!-- is popular -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- is popular -->
<script>
	function change_status_popular(id) {
		url = "{{ url('admin/tourdetails/update_status_popular') }}/" + id
		$.get(url, function() {
			alert("Status Enable&Disable");
		});
	}
</script>

<!-- is adventures -->
<script>
	function change_status_adventures(id) {
		url = "{{ url('admin/tourdetails/update_status_top_adventures') }}/" + id
		$.get(url, function() {
			alert("Status Enable&Disable");
		});
	}
</script>

<!-- is featured -->
<script>
	function change_status_featured(id) {
		url = "{{ url('admin/tourdetails/update_status_featured') }}/" + id
		$.get(url, function() {
			alert("Status Enable&Disable");
		});
	}
</script>

@endsection