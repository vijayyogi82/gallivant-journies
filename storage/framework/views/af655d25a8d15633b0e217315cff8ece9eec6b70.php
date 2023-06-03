
<?php $__env->startSection('content'); ?>

<div class="container">
					<div class="inner-body">
						<!-- Page Header -->
						<div class="page-header">

							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Tour Detail List </h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Tour Detail</a></li>
									<li class="breadcrumb-item active" aria-current="page">  Detail List</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
									<a type="button" href="<?php echo e(Route('tourdetail.create')); ?>" class="btn btn-primary my-2 btn-icon-text">
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
														<th class="wd-20p">Vacation Style</th>
														<th class="wd-20p">Activity Level</th>
														<th class="wd-20p">Group Size</th>
														<th class="wd-20p">Location</th>
														<th class="wd-15p">Action</th>
													</tr>
												</thead>
												<tbody>
												    <?php $__currentLoopData = $tourdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tourdetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<tr>
														<td><?php echo e($tourdetail->title); ?></td>
														<td><?php echo e($tourdetail->price); ?></td>
														<td><?php echo e($tourdetail->tourcategory->title ?? 'None'); ?></td>
														<td><?php echo e($tourdetail->activitylevel); ?></td>
														<td><?php echo e($tourdetail->groupsize); ?></td>
														<td><?php echo e($tourdetail->location); ?></td>
														
														</td>
														<td>
														<a class="btn btn-primary" href="<?php echo e(Route('tourdetail.show',$tourdetail->id)); ?>" type="button"><i class="fa fa-eye"></i></a>
														<a class="btn btn-primary" href="<?php echo e(Route('tourdetail.edit',$tourdetail->id)); ?>" type="button"><i class='fas fa-edit'></i></a>
														<a class="btn btn-danger" href="<?php echo e(url('admin/tourdetail/delete/'. $tourdetail->id)); ?>" type="button"><i class="fa fa-trash"></i></a>
														
														</td>
													</tr>
														
														</td>
													</tr>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.adminapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gallivant-journeys\resources\views/admin/tourdetails/index.blade.php ENDPATH**/ ?>