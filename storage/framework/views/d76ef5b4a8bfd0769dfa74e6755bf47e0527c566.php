<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo e($title); ?></title>
      <!-- favion -->
      <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('assets/frontent/img/favicon-16x16.png')); ?>">
      <!-- link to font awesome -->
      <link media="all" rel="stylesheet" href="<?php echo e(asset('assets/frontent/vendors/font-awesome/css/font-awesome.css')); ?>">
      <!-- link to material icon font -->
      <link media="all" rel="stylesheet" href="<?php echo e(asset('assets/frontent/vendors/material-design-icons/material-icons.css')); ?>">
      <!-- link to custom icomoon fonts -->
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontent/css/fonts/icomoon/icomoon.css')); ?>">
      <!-- link to wow js animation -->
      <link media="all" rel="stylesheet" href="<?php echo e(asset('assets/frontent/vendors/animate/animate.css')); ?>">
      <!-- include bootstrap css -->
      <link media="all" rel="stylesheet" href="<?php echo e(asset('assets/frontent/css/bootstrap.css')); ?>">
      <!-- include owl css -->
      <link media="all" rel="stylesheet" href="<?php echo e(asset('assets/frontent/vendors/owl-carousel/owl.carousel.css')); ?>">
      <link media="all" rel="stylesheet" href="<?php echo e(asset('assets/frontent/vendors/owl-carousel/owl.theme.css')); ?>">
      <!-- include main css -->
      <link media="all" rel="stylesheet" href="<?php echo e(asset('assets/frontent/css/main.css')); ?>">
      <!-- link to revolution css  -->
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontent/vendors/revolution/css/settings.css')); ?>">
   </head>
   <body>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.header','data' => []]); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
      <?php echo $__env->yieldContent('content'); ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.footer','data' => []]); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
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
   </body><?php /**PATH /var/www/html/Entrada/resources/views/layouts/app.blade.php ENDPATH**/ ?>