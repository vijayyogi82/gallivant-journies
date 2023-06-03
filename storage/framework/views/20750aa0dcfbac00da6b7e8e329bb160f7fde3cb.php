<?php $__env->startSection('content'); ?>
<div class="page-body">
<div class="container-fluid">
                <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                       <h3>Tour Location  List</h3>
                    </div>
                    <div class="col-lg-6 text-end">
                       <a class="btn btn-outline-info btn-sm" href="<?php echo e(Route('tourlocation.create')); ?>" type="button">Add</a>
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
	                    <h5>Tour Location</h5>
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
                                <?php $__currentLoopData = $tourlocations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tourlocation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                <tr>
	                                    <td><?php echo e($tourlocation->title); ?></td>
	                                    <td><?php echo $tourlocation->description; ?></td>
	                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" onclick="change_status(<?php echo e($tourlocation->id); ?>)"><span class="switch-state"></span>
                                        </label>
                                        </td>
	                                    <td>
                                           <a class="btn btn-primary" href="<?php echo e(Route('tourlocation.edit',$tourlocation->id)); ?>" type="button">Edit</a>
                                           <a class="btn btn-danger" onclick="destroy(<?php echo e($tourlocation->id); ?>)" type="button">Delete</a>
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

<script>
        function change_status(id){
    url = "<?php echo e(url('admin/tourlocation/update_status')); ?>/"+id
    $.get( url, function() {
        alert( "Load was performed." );
    });
}
</script>
<script>
    function destroy(id){
      url = "<?php echo e(url('admin/tourlocation/delete')); ?>/"+id
    $.get( url, function() {
        alert( "Load was performed." );
    });
}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.adminapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/gallivant-journeys/resources/views/admin/tourlocation/index.blade.php ENDPATH**/ ?>