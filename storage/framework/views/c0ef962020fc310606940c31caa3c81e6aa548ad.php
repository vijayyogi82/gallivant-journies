
<?php $__env->startSection('content'); ?>
<style>
	.thirteen h1 {
  position:relative; font-size:20px; font-weight:700;  letter-spacing:0px; text-transform:uppercase; width:150px; text-align:center; margin:auto; white-space:nowrap; border:2px solid #222;padding:5px 11px 3px 11px;
}
.thirteen h1:before, .thirteen h1:after {
    background-color: #c50000;
    position:absolute; 
    content: '';
    height: 7px;

    width: 7px; border-radius:50%;
    bottom: 12px;
}
.thirteen h1:before {
   left:-20px;
}
.thirteen h1:after {
   right:-20px;
}
</style>
<div class="container">
					<div class="inner-body">
						<!-- Page Header -->
						<div class="page-header">

							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Tour Detail View </h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Tour Detail</a></li>
									<li class="breadcrumb-item active" aria-current="page">  Detail View</li>
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
					
						<!-- Row -->


						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card  ">
									<div class="card-body">										
										<div class="row">											
											<div class="col-lg ">
											    <div class="d-flex">
													<h5>Title :  </h5>
												   <span class="mx-4">   <?php echo e($tourdetails ? $tourdetails->title :''); ?> </span>
                                                </div>
											</div>
											<div class="col-lg">
											   <div class="d-flex">
													<h5>Price :  </h5>
												   <span class="mx-4">   <?php echo e($tourdetails ? $tourdetails->price :''); ?> </span>
                                                </div>											
											</div>
											<div class="col-lg">
											   <div class="d-flex">
													<h5>Vacation Style :  </h5>
												   <span class="mx-4">   <?php echo e($tourdetails->tourcategory->title ?? ''); ?> </span>
                                                </div>																								
											</div>
										</div>	
										<div>
											<div class="row mg-t-50">											
												<div class="col-lg ">
													<div class="d-flex">
													  <h5>Activity Level :  </h5>
													  <span class="mx-4">   <?php echo e($tourdetails ? $tourdetails->activitylevel :''); ?> </span>
													</div>												
												</div>
												<div class="col-lg">
												   <div class="d-flex">
													  <h5>Group Size :  </h5>
													  <span class="mx-4">   <?php echo e($tourdetails ? $tourdetails->groupsize :''); ?></span>
													</div>
												   
												</div>
												<div class="col-lg">
												   <div class="d-flex">
													  <h5>Location :  </h5>
													  <span class="mx-4">  <?php echo e($tourdetails ? $tourdetails->location :''); ?></span>
													</div>
												</div>
											</div>
                                        </div>			
									</div>
							    </div>
							</div>
						</div>

						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card  ">
									<div class="card-body">										
										<div class="row mg-t-50">
										   <div >  
										   <div class="thirteen" style="top: -46px;position: relative;">
													<h1>Overview</h1>
													</div>
													<div class="wrap">
													
													</div>
                                            </div>   
											<div class="col-lg  ">
											<h5>Overview : </h5>
											<h6 style=" padding-left: 93px;"><?php echo e($tourdetails ? $tourdetails->overview :''); ?>


                                            </div>
											<div class="col-lg">
											<h5>Included :  </h5>
											<h6  style=" padding-left: 93px;"><?php echo e($tourdetails ? $tourdetails->included :''); ?> </h6> 
                                            </div>
											<div class="col-lg">
											<h5 >Not Included : <?php echo e($tourdetails ? $tourdetails->notincluded :''); ?>    </h5>
                                            </div>
                                        </div>	
									</div>
							    </div>
							</div>
						</div>

						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card  ">
									<div class="card-body">										
										<div class="row mg-t-50">
											<div class="thirteen" style="top: -46px;position: relative;">
												<h1>Itinerary</h1>
											</div>
											<div class="wrap">
											
											</div>

                                            <?php if($itinerarys): ?>
											<?php $__currentLoopData = $itinerarys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itinerary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<div class="row mb-20" >
											<div class="col-lg">
												<div class="d-flex">
													<h5>Day 1 : </h5>
													<span class="mx-4">   <?php echo e($itinerary ? $itinerary->days :''); ?> </span>
												</div>
                                            </div>		
                                            <div class="col-lg">
												<div class="d-flex">
													<h5>Editor: </h5>
													<span class="mx-4">    <?php echo e($itinerary ? $itinerary->description :''); ?>  </span>
												</div>
											</div>	
											</div>	

											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												<?php endif; ?>
																					            
                                        </div>	
									</div>
							    </div>
							</div>
						</div>						                
                        <!-- End Row -->


						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card  ">
									<div class="card-body">
									<div class="row mg-t-50">
										   <div >  
												<div class="thirteen" style="top: -46px;position: relative;">
													<h1>Gallary</h1>
													</div>
													<div class="wrap">
													
													</div>
                                            </div>   
											<?php if($gallarys): ?> 
												<?php $__currentLoopData = $gallarys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												
											<div class="col-lg col-sm-4">
												<!-- <img src="<?php echo e(asset('storage/tourdetai/' . $gallary->image)); ?>" alt="Image"  height="150px", width ="150px"> -->
												<img src="<?php echo e($gallary->image); ?>" alt="Image"  >
                                            </div>
													
												
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												<?php endif; ?>
											
                                        </div>										
											
									</div>
							    </div>
							</div>
						</div>
						<!-- End Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card  ">
									<div class="card-body">		
									   <div class="row mg-t-50">
										   <div >  
										   <div class="thirteen" style="top: -46px;position: relative;">
													<h1>Departure</h1>
													</div>
													<div class="wrap">
													
													</div>
                                            </div>  
											<?php if($departures): ?>
											<?php $__currentLoopData = $departures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<div class="row">
											<div class="col-lg ">
											    <div class="d-flex">
												  <h5>Date :  </h5>
												  <span class="mx-4">   <?php echo e($departure ? $departure->departure_date:''); ?></span>
											   </div>
                                            </div>

											<div class="col-lg">
											   <div class="d-flex">
												  <h5>Price : </h5>
												  <span class="mx-4">   <?php echo e($departure ? $departure->price:''); ?></span>
											   </div>
											 </div>
											<div class="col-lg">
											<div class="d-flex">
												  <h5>Seats : </h5>
												  <span class="mx-4">    <?php echo e($departure ? $departure->seats:''); ?> </span>
											   </div>
											</div>
											</div>

											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<?php endif; ?>
                                        </div>									
											
									</div>
							    </div>
							</div>
						</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.adminapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gallivant-journeys\resources\views/admin/tourdetails/show.blade.php ENDPATH**/ ?>