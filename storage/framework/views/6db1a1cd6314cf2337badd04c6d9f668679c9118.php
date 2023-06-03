<?php $__env->startSection('content'); ?>
<div class="page-body">
<div class="container-fluid">
                <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                       <h3>Tour Detail List</h3>
                    </div>
                    <div class="col-lg-6 text-end">
                       <a class="btn btn-outline-info btn-sm" href="<?php echo e(Route('tourdetail.create')); ?>" type="button">Add</a>
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
	                    <h5>Tour Detail</h5>
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
                                    <?php $__currentLoopData = $tourdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tourdetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                <tr>
	                                    <td><?php echo e($tourdetail->title); ?></td>
	                                    <td><?php echo e($tourdetail->price); ?></td>
	                                    <td><?php echo e($tourdetail->vacationstyle); ?></td>
                                        <td><?php echo e($tourdetail->activitylevel); ?></td>
                                        <td><?php echo e($tourdetail->groupsize); ?></td>
                                        <td><?php echo e($tourdetail->location); ?></td>
                                        
                                        </td>
	                                    <td>
                                           <a class="btn btn-primary" href="<?php echo e(Route('tourdetail.edit',$tourdetail->id)); ?>" type="button">Edit</a>

                                         
                                          <button><a class="btn btn-danger" href="<?php echo e(url('admin/tourdetail/delete/'. $tourdetail->id)); ?>" type="button">Delete</a></button>
                                        
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
	        <!-- HTML (DOM) sourced data  Ends-->
        </div>

    </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.adminapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/gallivant-journeys/resources/views/admin/tourdetails/index.blade.php ENDPATH**/ ?>