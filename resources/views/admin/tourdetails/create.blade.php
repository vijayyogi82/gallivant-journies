@extends('admin.layout.adminapp')
@section('content')
<div class="main-content pt-0">
	<div class="container">
		<div class="inner-body">
			<!-- Page Header -->
			<form action="{{route('tourdetail.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5">Tour Details Add</h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Tour Details</a></li>
							<li class="breadcrumb-item active" aria-current="page">Details Add</li>
						</ol>
					</div>
					<div class="d-flex">
						<div class="justify-content-center">
							<a type="button" href="{{URL('admin/tourdetail')}}" class="btn btn-primary my-2 btn-icon-text">
								<i class="fas fa-arrow-circle-left"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- End Page Header -->
				<div class="row row-sm">
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body">
								<div class="row row-sm">
									<div class="col-lg">
										<label for="validationTextarea" class="form-label">Title</label>
										<input class="form-control" name="title" type="text">
									</div>
									<div class="col-lg mg-t-10 mg-lg-t-0">
										<label for="validationTextarea" class="form-label">Price</label>
										<input class="form-control" name="price" type="text">
									</div>
									<div class="col-lg mg-t-10 mg-lg-t-0">
										<label for="validationTextarea" class="form-label">Location</label>
										<select name="location_id" class="form-control select-lg select2">
											<option class="disabled">Choose location</option>
											@if($tourlocations->count() > 0)
											@foreach($tourlocations as $tourlocation)
											<option value="{{$tourlocation->id}}">{{$tourlocation->title}}</option>
											@endForeach
											@else
											No Location Found
											@endif
										</select>
									</div>
								</div>
								<div class="row row-sm mg-t-20">
									<div class="col-lg">
										<label for="validationTextarea" class="form-label">Vacation style</label>
										<select name="tourcategory_id" class="form-control select-lg select2">
											<option value="">Select Vacation Style</option>
											@if($tourcategories->count() > 0)
											@foreach($tourcategories as $tourcategory)
											<option value="{{$tourcategory->id}}">{{$tourcategory->title}}</option>
											@endforeach
											@else
											No vocation Found
											@endif
										</select>
									</div>
									<div class="col-lg mg-t-10 mg-lg-t-0">
										<label for="validationTextarea" class="form-label">Activity Level</label>
										<select name="activitylevel" class="form-control select-lg select2">
											<option>Select Activity Level</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
									</div>
									<div class="col-lg mg-t-10 mg-lg-t-0">
										<label for="validationTextarea" class="form-label">Group Size</label>
										<select name="groupsize" class="form-control select-lg select2">
											<option>Select Group Size</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
									</div>
								</div>
								<div class="row row-sm mg-t-20">
									<div class="col-lg mg-t-10 mg-lg-t-0">
										<label for="">Featured Images</label>
										<input type="file" class="form-control" name="featured_image" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-sm">
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body">
								<div class="card custom-card" id="tab">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">All Tour Details </h6>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="border">
													<div class="bg-gray-300 nav-bg">
														<nav class="nav nav-tabs">
															<a class="nav-link active" data-bs-toggle="tab" href="#overview">Overview</a>
															<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Itinerary</button>
															<a class="nav-link" data-bs-toggle="tab" href="#gallary">Gallary</a>
															<button class="nav-link" id="depart-tab" data-bs-toggle="tab" data-bs-target="#depart-tab-pane" type="button" role="tab" aria-controls="depart-tab-pane" aria-selected="false">Departure</button>
														</nav>
													</div>
													<div class="card-body tab-content">
														<!-- overview -->
														<div class="tab-pane active show" id="overview">
															<div class="mb-3">
																<label for="summernote" class="form-label">Overview</label>
																<textarea class="form-control ckeditor" name="overview" id="summernote" placeholder="Required example textarea" required></textarea>
																<div class="invalid-feedback">
																	Please enter a message in the textarea.
																</div>
															</div>
															<div class="mb-3">
																<label for="summernote" class="form-label">Included</label>
																<textarea class="form-control ckeditor" name="included" id="summernote" placeholder="Required example textarea" required></textarea>
																<div class="invalid-feedback">
																	Please enter a message in the textarea.
																</div>
															</div>
															<div class="mb-3">
																<label for="summernote" class="form-label">Not Included</label>
																<textarea class="form-control ckeditor" name="not_included" id="summernote" placeholder="Required example textarea" required></textarea>
																<div class="invalid-feedback">
																	Please enter a message in the textarea.
																</div>
															</div>
															<button type="submit" class="btn btn-success uppercase text-center">SUBMIT </button>
														</div>
														<!-- itinerary -->
														<div class="tab-pane fade accordion-item" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
															<div id="collapseTwo" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTwo" data-bs-parent="#myTabContent">
																<div class="accordion-body">
																	<div class="container my-4">
																		<div id="dynamic-days-1" class="form-group dynamic-days">
																			<label for="days" class="font-weight-bold">Day 1</label>
																			<input type="text" id="days" class="form-control" name="days[]" />
																			<div class="form-group">
																				<label>Editor</label>
																				<textarea class="form-control summernote-1" name="description[]"></textarea>
																			</div>
																		</div>
																		<div class="clearfix mt-4">
																			<button type="button" id="add-button" class="btn btn-primary float-left text-uppercase shadow-sm"><i class="fas fa-plus fa-fw"></i> Add</button>
																			<button type="button" id="remove-button" class="btn btn-secondary float-left text-uppercase ml-1" disabled="disabled"><i class="fas fa-minus fa-fw"></i> Remove</button>
																			<button type="submit" class="btn btn-primary float-right text-uppercase shadow-sm">Submit</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- gallery -->
														<div class="tab-pane" id="gallary">
															<div class="container my-5">
																<div class="row">
																	<div class="col">
																		<div class="form-group mt-5">
																			<label for="">Choose Images</label>
																			<input type="file" class="form-control" name="images[]" multiple id="upload-img" />
																		</div>
																		<div class="img-thumbs img-thumbs-hidden" id="img-preview"></div>
																		<button type="submit" class="btn btn-success uppercase">SUBMIT</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- departure -->
														<div class="tab-pane fade accordion-item" id="depart-tab-pane" role="tabpanel" aria-labelledby="depart-tab" tabindex="0">
															<h2 class="accordion-header d-lg-none" id="headingfour">
															</h2>
															<div id="collapsefour" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingfour" data-bs-parent="#myTabContent">
																<div class="accordion-body">
																	<div class="container my-4">
																		<div id="dynamic-days-depar-1" class="form-group dynamic-days-depar row">
																			<div class="col-md-4">
																				<label>Date</label>
																				<input class="form-control" id="depart" name="depart[]" type="date" placeholder="" />
																			</div>
																			<div class="col-md-4">
																				<label>Price</label>
																				<input class="form-control" type="number" placeholder="" />
																			</div>
																			<div class="col-md-4">
																				<label>Seats</label>
																				<input class="form-control" type="number" placeholder="" />
																			</div>
																		</div>
																		<div class="clearfix mt-4">
																			<button type="button" id="add-button-depar" class="btn btn-primary float-left text-uppercase shadow-sm-depar"><i class="fas fa-plus fa-fw"></i> Add</button>
																			<button type="button" id="remove-button-depar" class="btn btn-secondary float-left text-uppercase ml-1" disabled="disabled"><i class="fas fa-minus fa-fw"></i> Remove</button>
																			<button type="submit" class="btn btn-primary float-right text-uppercase ">Submit</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<link href="https://cdn.jsdelivb.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<!-- AD NEW -->
<!-- depart -->
<!-- new -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script>
	$(document).ready(function() {
		var buttonAdd = $("#add-button");
		var buttonRemove = $("#remove-button");
		var className = ".dynamic-days";
		var count = 0;
		var days = "";
		var maxDays = 9999;

		function totalDays() {
			return $(className).length;
		}

		function addNewDays() {
			count = totalDays() + 1;
			days = $("#dynamic-days-1").clone();
			days.attr("id", "dynamic-days-" + count);
			days.children("label").text("Day " + count);
			days.find("input").val("");
			$(className + ":last").after($(days));
		}

		function removeLastDays() {
			if (totalDays() > 1) {
				$(className + ":last").remove();
			}
		}

		function enableButtonRemove() {
			if (totalDays() === 2) {
				buttonRemove.removeAttr("disabled");
				buttonRemove.addClass("shadow-sm");
			}
		}

		function disableButtonRemove() {
			if (totalDays() === 1) {
				buttonRemove.attr("disabled", "disabled");
				buttonRemove.removeClass("shadow-sm");
			}
		}


		function disableButtonAdd() {
			if (totalDays() === maxDays) {
				buttonAdd.attr("disabled", "disabled");
				buttonAdd.removeClass("shadow-sm");
			}
		}

		function enableButtonAdd() {
			if (totalDays() === (maxDays - 1)) {
				buttonAdd.removeAttr("disabled");
				buttonAdd.addClass("shadow-sm");
			}
		}

		buttonAdd.click(function() {
			addNewDays();
			enableButtonRemove();
			disableButtonAdd();
		});

		buttonRemove.click(function() {
			removeLastDays();
			disableButtonRemove();
			enableButtonAdd();
		});
	});
</script>
<script>
	$(document).ready(function() {
		var buttonAdd = $("#add-button-depar");
		var buttonRemove = $("#remove-button-depar");
		var className = ".dynamic-days-depar";
		var count = 0;
		var days = "";
		var maxDays = 9999;

		function totalDays() {
			return $(className).length;
		}

		function addNewDays() {
			count = totalDays() + 1;
			days = $("#dynamic-days-depar-1").clone();
			days.attr("id", "dynamic-days-depar-" + count);
			days.children("label").text("days " + count);
			days.find("input").val("");
			$(className + ":last").after($(days));
		}

		function removeLastDays() {
			if (totalDays() > 1) {
				$(className + ":last").remove();
			}
		}

		function enableButtonRemove() {
			if (totalDays() === 2) {
				buttonRemove.removeAttr("disabled");
				buttonRemove.addClass("shadow-sm-depar");
			}
		}


		function disableButtonRemove() {
			if (totalDays() === 1) {
				buttonRemove.attr("disabled", "disabled");
				buttonRemove.removeClass("shadow-sm-depar");
			}
		}


		function disableButtonAdd() {
			if (totalDays() === maxDays) {
				buttonAdd.attr("disabled", "disabled");
				buttonAdd.removeClass("shadow-sm-depar");
			}
		}


		function enableButtonAdd() {
			if (totalDays() === (maxDays - 1)) {
				buttonAdd.removeAttr("disabled");
				buttonAdd.addClass("shadow-sm-depar");
			}
		}


		buttonAdd.click(function() {
			addNewDays();
			enableButtonRemove();
			disableButtonAdd();
		});


		buttonRemove.click(function() {
			removeLastDays();
			disableButtonRemove();
			enableButtonAdd();
		});
	});
</script>
<script>
	$('.summernote').summernote({

		placeholder: 'Enter value',

		tabsize: 2,

		height: 120,

		toolbar: [

			['style', ['style']],

			['font', ['bold', 'underline', 'clear']],

			['color', ['color']],

			['para', ['ul', 'ol', 'paragraph']],

			['table', ['table']],

			['insert', ['link', 'picture', 'video']],

			['view', ['fullscreen', 'codeview', 'help']]

		]

	});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
	var imgUpload = document.getElementById('upload-img'),
		imgPreview = document.getElementById('img-preview'),
		imgUploadForm = document.getElementById('form-upload'),
		totalFiles, previewTitle, previewTitleText, img;
	imgUpload.addEventListener('change', previewImgs, true);



	function previewImgs(event) {
		totalFiles = imgUpload.files.length;
		if (!!totalFiles) {
			imgPreview.classList.remove('img-thumbs-hidden');
		}

		for (var i = 0; i < totalFiles; i++) {
			wrapper = document.createElement('div');
			wrapper.classList.add('wrapper-thumb');
			removeBtn = document.createElement("span");
			nodeRemove = document.createTextNode('x');
			removeBtn.classList.add('remove-btn');
			removeBtn.appendChild(nodeRemove);
			img = document.createElement('img');
			img.src = URL.createObjectURL(event.target.files[i]);
			img.classList.add('img-preview-thumb');
			wrapper.appendChild(img);
			wrapper.appendChild(removeBtn);
			imgPreview.appendChild(wrapper);
			$('.remove-btn').click(function() {
				$(this).parent('.wrapper-thumb').remove();
			});
		}
	}
</script>
@endsection