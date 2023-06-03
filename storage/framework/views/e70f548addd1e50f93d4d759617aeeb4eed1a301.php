
<?php $__env->startSection('content'); ?>
<div class="main-content pt-0">
				<div class="container">
					<div class="inner-body">
						<!-- Page Header -->
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
									<a type="button" href="<?php echo e(URL('admin/tourdetail')); ?>" class="btn btn-primary my-2 btn-icon-text">
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
												<input class="form-control"  name="title"  type="text">
											</div>
											<div class="col-lg mg-t-10 mg-lg-t-0">
                                     <label for="validationTextarea" class="form-label">Price</label>
												<input class="form-control"  name="price" type="text">
											</div>
											<div class="col-lg mg-t-10 mg-lg-t-0">
                                     <label for="validationTextarea" class="form-label">Location</label>
												<input class="form-control"   name="location" type="text">
											</div>
										</div>
										<div class="row row-sm mg-t-20">
											<div class="col-lg">
                                    <label for="validationTextarea" class="form-label">Vacation style</label>
                                    <select name="tourcategory_id" class="form-control select-lg select2">
                                       <option value="">Select Vacation Style</option>
                                       <?php $__currentLoopData = $tourdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tourdetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option value="<?php echo e($tourdetail->id); ?>"><?php echo e($tourdetail->title); ?></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
											</div>
											<div class="col-lg mg-t-10 mg-lg-t-0">
                                    <label for="validationTextarea"  class="form-label">Activity Level</label>
                                    <select name="activitylevel" class="form-control select-lg select2">
                                       <option value="">Select Activity Level</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                    </select>
											</div>
											<div class="col-lg mg-t-10 mg-lg-t-0">
                                    <label for="validationTextarea" class="form-label">Group Size</label>
                                    <select name="groupsize" class="form-control select-lg select2">
                                       <option value="">Select Group Size</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                    </select>
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
															<a class="nav-link" data-bs-toggle="tab" href="#itinerary">Itinerary</a>
															<a class="nav-link" data-bs-toggle="tab" href="#gallary">Gallary</a>
															<a class="nav-link" data-bs-toggle="tab" href="#departure">Departure</a>
														</nav>
													</div>
													<div class="card-body tab-content">
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
																<textarea class="form-control ckeditor" name="notincluded" id="summernote" placeholder="Required example textarea" required></textarea>
																<div class="invalid-feedback">
																	Please enter a message in the textarea.
																</div>
															</div>
															<button type="button" class=" btn btn-success uppercase text-center">SUBMIT </button>
														</div>
														<div class="tab-pane" id="itinerary">
                                                                  
														      <div class="mb-3" id = "div-itinerary" >
															        <?php echo csrf_field(); ?>
														           <label for="summernote" class="form-label text-dark">DAY 1 </label>
																  <input type="text" name="" class="col-sm-12">
																  <label for="summernote" class="form-label text-dark">Editor </label>
																  <textarea class="form-control ckeditor" name="editor" id="summernote" placeholder="Required example textarea" required></textarea>
																  <div class="invalid-feedback">
																	  Please enter a message in the textarea.
															       </div>
													          </div>

															     <button type="button" name="add-itinerary" id="add-itinerary" class=" btn btn-primary uppercase" >+ ADD</button>																												    													  
														         <button type="button" id= "divRemove" class=" btn btn-danger  uppercase">- REMOVE </button> 
														         <button type="button" class=" btn btn-success uppercase">SUBMIT </button>
														
														   
														
														</div>
														<div class="tab-pane" id="gallary">

														   <div class="container my-5">
																<div class="row">
																	<div class="col">
																	<form action="" method="post" enctype="multipart/form-data" id="form-upload"> 
																	      <?php echo csrf_field(); ?>
																		 

																		<div class="form-group mt-5">
																		<label for="">Choose Images</label>
																		<input type="file" class="form-control" name="images[]" multiple id="upload-img" />
																		</div>
																		<div class="img-thumbs img-thumbs-hidden" id="img-preview"></div>
																		<button type="submit" class="btn btn-success uppercase">SUBMIT</button>
																	</form>
																	</div>
																</div>
																	
														    </div> 
														
														</div>
														<div class="tab-pane" id="departure">
															<form method="post" action="">
															<?php echo csrf_field(); ?>
														    <table id = "elements-department" class=" table table-bordered depart-form">
														        
																<tr> 
																	<th>Date</th> 
																	<th>Price</th>
																	<th>Seats</th>	
																</tr>
												
																<tr> 
																<td><input type="date" name="date" class="form-control" ></td> 
																<td><input type="number" name="price" class="form-control" ></td> 
																<td><input type="text" name="seats" class="form-control" ></td>
																</tr> 
														    </table>
														         <button name="addbtn-department" id="addbtn-department" class=" btn btn-primary uppercase" >+ ADD</button>																												    													  
														         <button  id= "remove-department" class=" btn btn-danger uppercase ">- REMOVE </button> 
														         <button class=" btn btn-success uppercase" name="departsubmit" id="departsubmit" >SUBMIT </button>
															</form>
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
						<!-- End Row-->
					</div>
				</div>
			</div>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
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
		$(document).ready(function () {
			$("#addbtn-department").click(function () {
				$("#elements-department").append(`<tr id="remove-tr">
				<td><input type="date" name="date" class="form-control" ></td> 
				<td><input type="number" name="price" class="form-control" ></td> 
				<td><input type="text" name="seats" class="form-control" ></td>
				</tr>`);
			});
			$("body").on("click", "#remove-department", function(e) {
			$("#remove-tr").last().remove();
		 });
		});

		$(document).ready(function () {
			$("#add-itinerary").click(function () {
				$("#div-itinerary").append(` <div class="mb-3" id = "new-itinerary" >
				<label for="summernote" class="form-label text-dark">DAY 1 </label>
				<input type="text" name="" class="col-sm-12">
				<label for="summernote" class="form-label text-dark">Editor </label>
				<textarea class="form-control ckeditor" name="editor" id="summernote" placeholder="Required example textarea" required></textarea>
				<div class="invalid-feedback">
				Please enter a message in the textarea.
				</div>
				</div>`);
			});
			$("body").on("click", "#divRemove", function(e) {
			$("#new-itinerary").last().remove();
		  });
	   });

		var imgUpload = document.getElementById('upload-img')
		, imgPreview = document.getElementById('img-preview')
		, imgUploadForm = document.getElementById('form-upload')
		, totalFiles
		, previewTitle
		, previewTitleText
		, img;

		imgUpload.addEventListener('change', previewImgs, true);

		function previewImgs(event) {
		totalFiles = imgUpload.files.length;

			if(!!totalFiles) {
			imgPreview.classList.remove('img-thumbs-hidden');
		}

		for(var i = 0; i < totalFiles; i++) {
			wrapper = document.createElement('div');
			wrapper.classList.add('wrapper-thumb');
			removeBtn = document.createElement("span");
			nodeRemove= document.createTextNode('x');
			removeBtn.classList.add('remove-btn');
			removeBtn.appendChild(nodeRemove);
			img = document.createElement('img');
			img.src = URL.createObjectURL(event.target.files[i]);
			img.classList.add('img-preview-thumb');
			wrapper.appendChild(img);
			wrapper.appendChild(removeBtn);
			imgPreview.appendChild(wrapper);

			$('.remove-btn').click(function(){
			$(this).parent('.wrapper-thumb').remove();
			});    

		}
		
		}
</script>
<script>
    
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.adminapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gallivant-journeys\resources\views/admin/tourdetails/create.blade.php ENDPATH**/ ?>