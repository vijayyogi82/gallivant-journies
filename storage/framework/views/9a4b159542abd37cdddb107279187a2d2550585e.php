<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from laravel.pixelstrap.com/viho/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jun 2022 10:45:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
        <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app" />
        <meta name="author" content="pixelstrap" />
        <link rel="icon" href="<?php echo e(asset('assets/frontent/img/favicon.png')); ?>" type="image/x-icon" />
        <link rel="shortcut icon" href="<?php echo e(asset('assets/frontent/img/favicon.png')); ?>" type="image/x-icon" />
        <title>login| gallivant-journeys
</title>
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
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontent/css/dashboard/responsive.css')); ?>">  </head>
    <body>
     
        <!-- Loader ends-->
        <!-- error page start //-->
            <section>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card">
                    <form class="theme-form login-form" action="<?php echo e(route('adminlogin')); ?>" method ="POST">
						<?php echo csrf_field(); ?>
                        <h4>Login</h4>
                        <h6>Welcome back! Log in to your account.</h6>
                        <div class="form-group">
                            <label>Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="icon-email"></i></span>
                                <input class="form-control" type="email" name="email" placeholder="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="icon-lock"></i></span>
                                <input class="form-control" type="password" name="password"  placeholder="" />
                                <div class="show-hide"><span class="show"> </span></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <input id="checkbox1" type="checkbox" />
                                <label for="checkbox1">Remember password</label>
                            </div>
                            <a class="link" href="forget-password.html">Forgot password?</a>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

	
    
        <!-- error page end //-->
        <!-- latest jquery-->
        <script src="<?php echo e(asset('assets/frontent/js/jquery-3.5.1.min.js')); ?>"></script>
<!-- feather icon js-->
<script src="<?php echo e(asset('assets/frontent/js/icons/feather-icon/feather.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontent/js/icons/feather-icon/feather-icon.js')); ?>"></script>
<!-- Sidebar jquery-->
<script src="<?php echo e(asset('assets/frontent/js/config.js')); ?>"></script>
<!-- Bootstrap js-->
<script src="<?php echo e(asset('assets/frontent/js/bootstrap/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/frontent/js/bootstrap/bootstrap.min.js')); ?>"></script>
<!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="<?php echo e(asset('assets/frontent/js/script.js')); ?>"></script>
<!-- Plugin used-->
    </body>

<!-- Mirrored from laravel.pixelstrap.com/viho/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jun 2022 10:45:23 GMT -->
</html>



<?php /**PATH /var/www/html/gallivant-journeys/resources/views/admin/login/form.blade.php ENDPATH**/ ?>