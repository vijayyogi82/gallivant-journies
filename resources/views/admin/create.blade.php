@extends('admin.layout.adminapp')
@section('content')
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
                                       @foreach($tourdetails as $tourdetail)
                                       <option value="{{$tourdetail->id}}">{{$tourdetail->title}}</option>
                                       @endforeach
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
														</div>
														<div class="tab-pane" id="itinerary">

														      <div class="mb-3" >
														           <label for="summernote" class="form-label text-dark">DAY 1 </label>
																  <input type="text" name="" class="col-sm-12">
																  <label for="summernote" class="form-label text-dark">Editor </label>
																  <textarea class="form-control ckeditor" name="editor" id="summernote" placeholder="Required example textarea" required></textarea>
																  <div class="invalid-feedback">
																	  Please enter a message in the textarea.
															       </div>

													          </div>

															  <div id="elements-itinerary"></div>
                                                               </div>

															     <button type="button" name="add-itinerary"  id="add-itinerary" class=" btn btn-primary uppercase" >+ ADD</button>																												    													  
														         <button type="button" id= "remove-itinerary" class="delete btn btn-danger  uppercase">- REMOVE </button> 
														         <button type="button" class=" btn btn-success uppercase">SUBMIT </button>
														
														         <!-- <form class="form-horizontal">
															      <fieldset>
																
															 
															      <legend>Referral form | Add below:</legend>

															
															     <div id="items" class=" input_fields remove-div form-group "  id = "itinerary-fields">
															      <label class="col-md-4 control-label" for="textinput" name="name" >Name</label>
															      <div class="col-md-4 margin-bottom">
															      <input id="textinput" name="textinput" name="referral" type="text" placeholder="Enter name of referral" class="form-control input-md">
                                                            
															       </div>		
															      </div>
                                                             
																													 
														           <button type="button" name="add-more-itinerary" id="add-more-itinerary" class="add-more-itinerary btn btn-primary" > + ADD</button>
														          <button type="button" name="remove-itinerary" id="remove-itinerary" class=" btn btn-primary" >-REMOVE</button>		
														          <button class="delete btn button-white uppercase">SUBMIT </button>

															

															      </fieldset>
													           </form> -->
														
													  </div>
														<div class="tab-pane" id="gallary">
															<form action="" method="post" enctype="multipart/form-data">
															 <table class= "table ">
																 <tr>																    
																     <td><input type="file" class="form-control" name="image" multiple=""> </td>									
																     
  
                                                                  </tr>
																   
																  
                                                              </table>
															      
														  </form>
 
														          <button class="delete btn btn-success uppercase">SUBMIT </button>
														
															 
														</div>
														<div class="tab-pane" id="departure">
														  <table id = "elements-department" class=" table table-bordered">
														     
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
														         <button name="addbtn-department" id="addbtn-department" class=" btn btn-primary" >+ ADD</button>																												    													  
														         <button  id= "remove-department" class="delete btn btn-danger  uppercase inputRemove ">- REMOVE </button> 
														         <button class=" btn btn-primary uppercase">SUBMIT </button>
	 
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
    $("#remove-department").on('click', '.inputRemove', ()=> {
        $("#remove-tr").remove()
  });
});
</script>


<script>
// 	$(document).ready(function () {
//     $("#addbtn-itinerary").click(function () {
//         $("#elements-itinerary").append(`<div class="mb-3" id="new-itinerary"><label for="summernote" class="form-label text-dark">DAY 1 </label>
//                <input type="text" name="" class="col-sm-12"><label for="summernote" class="form-label text-dark">Editor </label>
//                 <textarea class="form-control ckeditor" name="editor" id="summernote" placeholder="Required example textarea" required></textarea>
//                 <div class="invalid-feedback">Please enter a message in the textarea.</div>< class="col"></div>`);
//     });
//     $("#remove-itinerary").on('click', '.itinerary-Remove', ()=> {
//         $("#new-itinerary").remove()
//   });
// });
</script>

@endsection