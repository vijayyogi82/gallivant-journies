
<?php $__env->startSection('content'); ?> 


<!-- main container-->
<main id="main">
				<!-- top information area -->
				<div class="inner-top">
					<div class="container">
						<h1 class="inner-main-heading">Login</h1>
						<!-- breadcrumb -->
						<nav class="breadcrumbs">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">pages</a></li>
								<li><span>Login</span></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="inner-main common-spacing container">
					<!-- form -->
					<form class="twocol-form" action="#">
						<div class="row">
							<div class="col-md-6">
								<div class="top-box">
									<span class="holder height">Login</span>
								</div>
								<div class="form-holder">
									<div class="wrap">
										<div class="hold">
											<label for="uname">Username or Email</label>
											<input type="text" id="uname" class="form-control">
										</div>
										<div class="hold">
											<label for="pass">Password</label>
											<input type="password" id="pass" class="form-control">
										</div>
										<div class="btn-hold">
											<button type="submit" class="btn btn-default">Login</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="top-box">
									<span class="holder height">Register</span>
								</div>
								<div class="form-holder">
									<div class="wrap">
										<div class="hold">
											<label for="name">Name</label>
											<input type="text" id="name" class="form-control">
										</div>
										<div class="hold">
											<label for="uname1">Username</label>
											<input type="text" id="uname1" class="form-control">
										</div>
										<div class="hold">
											<label for="email">Email</label>
											<input type="email" id="email" class="form-control">
										</div>
										<div class="hold">
											<label for="reg-pass">Password</label>
											<input type="password" id="reg-pass" class="form-control">
										</div>
										<div class="btn-hold">
											<button type="submit" class="btn btn-default">Register</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</main>
 <?php $__env->stopSection(); ?>           
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/updateproject/public_html/gallivant-journeys/resources/views/user/login.blade.php ENDPATH**/ ?>