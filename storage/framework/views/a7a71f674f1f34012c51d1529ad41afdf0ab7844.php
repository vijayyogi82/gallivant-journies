<?php $__env->startSection('content'); ?>
 <div class="page-body">
          <!-- Container-fluid starts-->
          	<div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>Tour Location Update</h3>
        </div>
        <div class="col-lg-6">
        </div>
      </div>
    </div>
</div>	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-body">
	                    <div class="form theme-form">
							<!-- aaa -->
							<form class="image-upload" method="post" action="<?php echo e(route('tourlocation.update',$tourlocation->id)); ?>" enctype="multipart/form-data">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('PUT'); ?>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" value="<?php echo e($tourlocation->title); ?>" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control ckeditor" name="description"><?php echo $tourlocation->description; ?> </textarea>
                            </div>
							<div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control"/>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success btn-sm">update</button>
                            </div>
                        </form>
							<!-- fgthgth -->
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	
	
          <!-- Container-fluid Ends-->
        </div>
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script>
    $('.summernote').summernote({
        placeholder: 'enter value',
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
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.adminapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Entrada/resources/views/admin/tourlocation/edit.blade.php ENDPATH**/ ?>