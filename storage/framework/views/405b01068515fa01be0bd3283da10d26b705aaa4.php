<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Dashlead -  Admin Panel HTML Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin,dashboard,panel,bootstrap admin template,bootstrap dashboard,dashboard,themeforest admin dashboard,themeforest admin,themeforest dashboard,themeforest admin panel,themeforest admin template,themeforest admin dashboard,cool admin,it dashboard,admin design,dash templates,saas dashboard,dmin ui design">

		<!-- Favicon -->
		<link rel="icon" href="<?php echo e(asset('assets/user/img/user/logo-2.png')); ?>" type="image/x-icon"/>

		<!-- Title -->
		<title>Gallivant Journeys</title>

		<!-- Bootstrap css-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
		<link  id="style" href="<?php echo e(asset('assets/Admin/assets/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet"/>

		<!-- Icons css-->
		<link href="<?php echo e(asset('assets/Admin/assets/plugins/web-fonts/icons.css')); ?>" rel="stylesheet"/>
		<link href="<?php echo e(asset('assets/Admin/assets/plugins/web-fonts/font-awesome/font-awesome.min.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('assets/Admin/assets/plugins/web-fonts/plugin.css')); ?>" rel="stylesheet"/>

		<!-- Style css-->
		<link href="<?php echo e(asset('assets/Admin/assets/css/style.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('assets/Admin/assets/plugins/datatable/css/dataTables.bootstrap5.css')); ?>" rel="stylesheet" />

		<link href="<?php echo e(asset('assets/Admin/assets/plugins/datatable/css/buttons.bootstrap5.min.css')); ?>"  rel="stylesheet">
		<link href="<?php echo e(asset('assets/Admin/assets/plugins/datatable/css/responsive.bootstrap5.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/Admin/assets/css/boxed.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/Admin/assets/css/dark-boxed.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/Admin/assets/css/skins.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('assets/Admin/assets/css/dark-style.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('assets/Admin/assets/css/colors/default.css')); ?>" rel="stylesheet">

		<!-- Color css-->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo e(asset('assets/Admin/assets/css/colors/color7.css')); ?>">

		<!---Select2 css-->
		<link href="<?php echo e(asset('assets/Admin/assets/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet">

		<!-- Mutipleselect css-->
		<link rel="stylesheet" href="<?php echo e(asset('assets/Admin/assets/plugins/multipleselect/multiple-select.css')); ?>">
		<!-- Internal Summernote css-->
		<link rel="stylesheet" href="<?php echo e(asset('assets/Admin/assets/plugins/summernote/summernote-bs4.css')); ?>">
	</head>
   <body>

       <?php if (isset($component)) { $__componentOriginal2a47292f4e4050071cfddfd6ba8e2a3a4c127757 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Header::class, []); ?>
<?php $component->withName('Admin.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a47292f4e4050071cfddfd6ba8e2a3a4c127757)): ?>
<?php $component = $__componentOriginal2a47292f4e4050071cfddfd6ba8e2a3a4c127757; ?>
<?php unset($__componentOriginal2a47292f4e4050071cfddfd6ba8e2a3a4c127757); ?>
<?php endif; ?>
     
      <?php echo $__env->yieldContent('content'); ?>

     <?php if (isset($component)) { $__componentOriginal273b99c895545dc613f61f0747b5dd769beb60e4 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Footer::class, []); ?>
<?php $component->withName('Admin.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal273b99c895545dc613f61f0747b5dd769beb60e4)): ?>
<?php $component = $__componentOriginal273b99c895545dc613f61f0747b5dd769beb60e4; ?>
<?php unset($__componentOriginal273b99c895545dc613f61f0747b5dd769beb60e4); ?>
<?php endif; ?>

 
	<!-- Jquery js-->
  <script src="<?php echo e(asset('assets/Admin/assets/plugins/jquery/jquery.min.js')); ?>"></script>

<!-- Bootstrap js-->
<script src="<?php echo e(asset('assets/Admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<!-- Chart.Bundle js-->
<script src="<?php echo e(asset('assets/Admin/assets/plugins/chart.js/Chart.bundle.min.js')); ?>"></script>

<!-- Peity js-->
<script src="<?php echo e(asset('assets/Admin/assets/plugins/peity/jquery.peity.min.js')); ?>"></script>

<!-- Flot Chart js-->
<script src="<?php echo e(asset('assets/Admin/assets/plugins/jquery.flot/jquery.flot.js')); ?>"></script>
<script src="<?php echo e(asset('assets/Admin/assets/plugins/jquery.flot/jquery.flot.pie.js')); ?>"></script>
<script src="<?php echo e(asset('assets/Admin/assets/plugins/jquery.flot/jquery.flot.resize.js')); ?>"></script>

<!-- Jquery-Ui js-->
<script src="<?php echo e(asset('assets/Admin/assets/plugins/jquery-ui/ui/widgets/datepicker.js')); ?>"></script>

<!-- Select2 js-->
<script src="<?php echo e(asset('assets/Admin/assets/plugins/select2/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/Admin/assets/js/select2.js')); ?>"></script>

<!--MutipleSelect js-->
<script src="<?php echo e(asset('assets/Admin/assets/plugins/multipleselect/multiple-select.js')); ?>"></script>
<script src="<?php echo e(asset('assets/Admin/assets/plugins/multipleselect/multi-select.js')); ?>"></script>

<!-- Internal Morris js -->
<script src="<?php echo e(asset('assets/Admin/assets/plugins/raphael/raphael.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/Admin/assets/plugins/morris.js/morris.min.js')); ?>"></script>

<!-- Sidebar js-->
<script src="<?php echo e(asset('assets/Admin/assets/plugins/sidebar/sidebar.js')); ?>"></script>

<!-- Perfect-scrollbar js-->
<script src="<?php echo e(asset('assets/Admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>

<!-- Sticky js-->
<script src="<?php echo e(asset('assets/Admin/assets/js/sticky.js')); ?>"></script>

<!-- Circle Progress js-->
<script src="<?php echo e(asset('assets/Admin/assets/js/circle-progress.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/Admin/assets/js/chart-circle.js')); ?>"></script>

<!-- Dashboard js-->
<script src="<?php echo e(asset('assets/Admin/assets/js/index.js')); ?>"></script>

<!-- Custom js-->
<script src="<?php echo e(asset('assets/Admin/assets/js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/Admin/assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/Admin/assets/plugins/datatable/js/dataTables.bootstrap5.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/Admin/assets/plugins/datatable/js/dataTables.buttons.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/Admin/assets/plugins/datatable/js/buttons.bootstrap5.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/Admin/assets/plugins/datatable/js/jszip.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/Admin/assets/plugins/datatable/pdfmake/pdfmake.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/Admin/assets/plugins/datatable/pdfmake/vfs_fonts.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/Admin/assets/plugins/datatable/js/buttons.html5.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/Admin/assets/plugins/datatable/js/buttons.print.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/Admin/assets/plugins/datatable/js/buttons.colVis.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/Admin/assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/Admin/assets/plugins/datatable/responsive.bootstrap5.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/Admin/assets/js/table-data.js')); ?>"></script>
	<!-- Internal Form-validation js-->
	<script src="<?php echo e(asset('assets/Admin/assets/js/form-validation.js')); ?>"></script>
	<!-- Internal Summernote js-->
	<script src="<?php echo e(asset('assets/Admin/assets/plugins/summernote/summernote-bs4.js')); ?>"></script>
   </body>
<?php /**PATH /home/jatin/Desktop/All project/gallivant-journeys/resources/views/admin/layout/adminapp.blade.php ENDPATH**/ ?>