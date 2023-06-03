<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Spruha -  Admin Panel HTML Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin,dashboard,panel,bootstrap admin template,bootstrap dashboard,dashboard,themeforest admin dashboard,themeforest admin,themeforest dashboard,themeforest admin panel,themeforest admin template,themeforest admin dashboard,cool admin,it dashboard,admin design,dash templates,saas dashboard,dmin ui design">

		<!-- Favicon -->
		<link rel="icon" href="<?php echo e(asset('assets/user/img/user/logo-2.png')); ?>" type="image/x-icon"/>
		
		<!-- Title -->
		<title>Login| Gallivant-Journeys</title>

		<!-- Bootstrap css-->
		<link  id="style" href="<?php echo e(asset('assets/Admin/assets/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet"/>

		<!-- Icons css-->
		<link href="<?php echo e(asset('assets/Admin/assets/plugins/web-fonts/icons.css')); ?>" rel="stylesheet"/>
		<link href="<?php echo e(asset('assets/Admin/assets/plugins/web-fonts/font-awesome/font-awesome.min.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('Admin/assets/plugins/web-fonts/plugin.css')); ?>" rel="stylesheet"/>

		<!-- Style css-->
		<link href="<?php echo e(asset('assets/Admin/assets/css/style.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('assets/Admin/assets/css/boxed.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/Admin/assets/css/dark-boxed.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/Admin/assets/css/skins.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('assets/Admin/assets/css/dark-style.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('assets/Admin/assets/css/colors/default.css')); ?>" rel="stylesheet">

		<!-- Color css-->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo e(asset('assets/Admin/assets/css/colors/color5.css')); ?>">

	</head>

	<body class="main-body leftmenu">

		<!-- Loader -->
		<!-- <div id="global-loader">
			<img src="<?php echo e(asset('assets/user/img/user/logo-2.png')); ?>" class="loader-img" alt="Loader">
		</div> -->
		<!-- End Loader -->

		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row signpages text-center">
				<div class="col-md-12">
					<div class="card">
						<div class="row row-sm">
							<div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
								<div class="mt-5 pt-4 p-2 pos-absolute">
									<img src="<?php echo e(asset('assets/user/img/user/logo-2.png')); ?>" class="header-brand-img mb-4" alt="logo" style=" height:130px;">
									<div class="clearfix"></div>
									<img src="<?php echo e(asset('assets/Admin/assets/img/svgs/user.svg')); ?>" class="ht-100 mb-0" alt="user">
									<h5 class="mt-4 text-white">Create Your Account</h5>
									<span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signup to create, discover and connect with the global community</span>
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
								<div class="container-fluid">
									<div class="row row-sm">
										<div class="card-body mt-2 mb-2">
											<img src="../../assets/img/brand/logo.png" class=" d-lg-none header-brand-img text-start float-start mb-4" alt="logo">
											<div class="clearfix"></div>
											<form class="theme-form login-form" action="<?php echo e(route('adminlogin')); ?>" method ="POST">
                                                <?php echo csrf_field(); ?>
												<h5 class="text-start mb-2">Signin to Your Account</h5>
												<p class="mb-4 text-muted tx-13 ms-0 text-start">Signin to create, discover and connect with the global community</p>
												<div class="form-group text-start">
													<label>Email</label>
													<input class="form-control" name="email" placeholder="Enter your email" type="text">
												</div>
												<div class="form-group text-start">
													<label>Password</label>
													<input class="form-control" placeholder="Enter your password" name="password" type="password">
												</div>
												<button class="btn ripple btn-main-primary btn-block" type="submit">Sign In</button>
											</form>
											<div class="text-start mt-5 ms-0">
												<div class="mb-1"><a href="">Forgot password?</a></div>
												<div>Don't have an account? <a href="#">Register Here</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
		<!-- End Page -->

		<!-- Jquery js-->
		<script src="<?php echo e(asset('assets/Admin/assets/plugins/jquery/jquery.min.js')); ?>"></script>

		<!-- Bootstrap js-->
		<script src="<?php echo e(asset('assets/Admin/assets/plugins/bootstrap/js/popper.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/Admin/assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>

		<!-- Select2 js-->
		<script src="<?php echo e(asset('assets/Admin/assets/plugins/select2/js/select2.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/Admin/assets/js/select2.js')); ?>"></script>

		<!-- Custom js -->
		<script src="<?php echo e(asset('assets/Admin/assets/js/custom.js')); ?>"></script>

	</body>
</html><?php /**PATH C:\xampp\htdocs\gallivant-journeys\resources\views/admin/login/form.blade.php ENDPATH**/ ?>