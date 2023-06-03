<?php $__env->startSection('content'); ?>
<div class="main-content pt-0">
<div class="container">
    <div class="inner-body">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">Tour Location Edit</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tour Location</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Location Edit</li>
                </ol>
            </div>
            <div class="d-flex">
                <div class="justify-content-center">
                    <a type="button" href="<?php echo e(URL('admin/tourlocation')); ?>" class="btn btn-primary my-2 btn-icon-text">
                    <i class="fas fa-arrow-circle-left"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <form class="was-validated" method="post" action="<?php echo e(route('tourlocation.update',$tourlocation->id)); ?>" enctype="multipart/form-data">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('PUT'); ?>
                            <div class="mb-3">
                               <label for="validationTextarea" class="form-label">Textarea</label>
                                <input type="text" class="form-control border-end-0" name="title" value="<?php echo e($tourlocation->title); ?>" id="validationTextarea" required>
                            </div>
                            <div class="mb-3">
                              <label for="validationTextarea1" class="form-label">Description</label>
                              <textarea class="form-control ckeditor" name="description" id="validationTextarea1" placeholder="Required example textarea" required><?php echo $tourlocation->description; ?></textarea>
                              <div class="invalid-feedback">
                                Please enter a message in the textarea.
                              </div>
                            </div>
                            <div class="mb-3">
                               <label for="validationTextarea2" class="form-label">Image</label>
                                <input type="file" class="form-control border-end-0" name="image" value="<?php echo e($tourlocation->image); ?>" id="validationTextarea2" required>
                            </div>
                           <img src="<?php echo e(asset('storage/tourlocation/'. $tourlocation->image)); ?>"  height="150px", width ="150px">
                        
                            <div class="mb-3 my-4">
                              <button class="btn btn-primary" type="submit">Update</button>
                            </div>  
                          </form>
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

<?php echo $__env->make('admin.layout.adminapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jatin/Desktop/All project/gallivant-journeys/resources/views/admin/tourlocation/edit.blade.php ENDPATH**/ ?>