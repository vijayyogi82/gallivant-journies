<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities. laravel/framework: ^8.40">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo e(asset('assets/frontent/img/logos/logo.svg')); ?>" type="image/x-icon">
    
    <link rel="shortcut icon" href="<?php echo e(asset('assets/frontent/img/logos/logo-gray.svg')); ?>" type="image/x-icon">
    <title>Default Page</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontent/css/dashboard/fontawesome.css')); ?>">
<!-- ico-font-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontent/css/dashboard/icofont.css')); ?>">
<!-- Themify icon-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontent/css/dashboard/themify.css')); ?>">
<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontent/css/dashboard/flag-icon.css')); ?>">
<!-- Feather icon-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontent/css/dashboard/feather-icon.css')); ?>">
<!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontent/css/dashboard/animate.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontent/css/dashboard/chartist.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontent/css/dashboard/date-picker.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontent/css/dashboard/prism.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontent/css/dashboard/vector-map.css')); ?>">
<!-- Plugins css Ends-->
<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontent/css/dashboard/bootstrap.css')); ?>">
<!-- App css-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontent/css/dashboard/style.css')); ?>">
<link id="color" rel="stylesheet" href="<?php echo e(asset('assets/frontent/css/dashboard/color-1.css')); ?>" media="screen">
<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontent/css/dashboard/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontent/css/dashboard/responsive.css')); ?>">  
</head>
   <body>
    <!-- main wrapper -->
 <div id="wrapper">
 <div class="page-wrapper">
 <!-- main header -->
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
    </div>
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

       <!-- latest jquery-->
    <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/jquery-3.5.1.min.js')); ?>"></script>
    
<!-- feather icon js-->
<script src="<?php echo e(asset('assets/frontent/js/dashboardjs/icons/feather-icon/feather.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontent/js/dashboardjs/icons/feather-icon/feather-icon.js')); ?>"></script>
<!-- Sidebar jquery-->
<script src="<?php echo e(asset('assets/frontent/js/dashboardjs/sidebar-menu.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontent/js/dashboardjs/config.js')); ?>"></script>
<!-- Bootstrap js-->
<script src="<?php echo e(asset('assets/frontent/js/dashboardjs/bootstrap/popper.min.js')); ?>"></script>
<script src="assets/js/bootstrap/bootstrap.min.js"></script>
<!-- Plugins JS start-->
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/chart/chartist/chartist.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/chart/chartist/chartist-plugin-tooltip.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/chart/knob/knob.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/chart/knob/knob-chart.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/chart/apex-chart/apex-chart.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/chart/apex-chart/stock-prices.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/prism/prism.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/clipboard/clipboard.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/counter/jquery.waypoints.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/counter/jquery.counterup.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/counter/counter-custom.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/custom-card/custom-card.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/notify/bootstrap-notify.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/vector-map/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/vector-map/map/jquery-jvectormap-world-mill-en.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/vector-map/map/jquery-jvectormap-us-aea-en.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/vector-map/map/jquery-jvectormap-uk-mill-en.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/vector-map/map/jquery-jvectormap-au-mill.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/vector-map/map/jquery-jvectormap-chicago-mill-en.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/vector-map/map/jquery-jvectormap-in-mill.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/vector-map/map/jquery-jvectormap-asia-mill.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/dashboard/default.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs//notify/index.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/datepicker/date-picker/datepicker.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/datepicker/date-picker/datepicker.en.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
    <!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="<?php echo e(asset('assets/frontent/js/dashboardjs/script.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontent/js/dashboardjs/theme-customizer/customizer.js')); ?>"></script>
<!-- Plugin used-->  </body>





      <!-- jquery library -->
      <script src="<?php echo e(asset('assets/frontent/vendors/jquery/jquery-2.1.4.min.js')); ?>"></script>
      <!-- external scripts -->
      <script src="<?php echo e(asset('assets/frontent/vendors/bootstrap/javascripts/bootstrap.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/vendors/jquery-placeholder/jquery.placeholder.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/vendors/match-height/jquery.matchHeight.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/vendors/wow/wow.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/vendors/stellar/jquery.stellar.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/vendors/validate/jquery.validate.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/vendors/waypoint/waypoints.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/vendors/counter-up/jquery.counterup.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/vendors/jquery-ui/jquery-ui.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/vendors/jQuery-touch-punch/jquery.ui.touch-punch.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/vendors/fancybox/jquery.fancybox.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/vendors/owl-carousel/owl.carousel.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/vendors/jcf/js/jcf.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/vendors/jcf/js/jcf.select.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/mailchimp.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/vendors/retina/retina.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/vendors/sticky-kit/sticky-kit.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/sticky-kit-init.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/vendors/bootstrap-datetimepicker-master/dist/js/bootstrap-datepicker.js')); ?>"></script>
      <!-- custom jquery script -->
      <script src="<?php echo e(asset('assets/frontent/js/jquery.main.js')); ?>"></script>
      <!-- revolution slider plugin -->
      <script type="text/javascript" src="<?php echo e(asset('assets/frontent/vendors/revolution/js/jquery.themepunch.tools.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/frontent/vendors/revolution/js/jquery.themepunch.revolution.min.js')); ?>"></script>
      <!-- rs5.0 core files -->
      <script type="text/javascript" src="<?php echo e(asset('assets/frontent/vendors/revolution/js/jquery.themepunch.tools.min.js?rev=5.0')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/frontent/vendors/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/frontent/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/frontent/vendors/revolution/js/extensions/revolution.extension.actions.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/frontent/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/frontent/vendors/revolution/js/extensions/revolution.extension.parallax.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/frontent/vendors/revolution/js/extensions/revolution.extension.video.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/frontent/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/frontent/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js')); ?>"></script>
      <!-- revolutions slider script -->
      <script src="<?php echo e(asset('assets/frontent/js/revolution.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/frontent/js/dashboardjs/datatable/datatables/datatable.custom.js')); ?>"></script>
   </body>
<?php /**PATH /var/www/html/Entrada/resources/views/admin/layout/adminapp.blade.php ENDPATH**/ ?>