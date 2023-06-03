<?php $__env->startSection('content'); ?>
<div   style=" background-color: #252525;height: 103px;">

</div>
	<main id="main">
				<!-- main tour information -->
				<section class="container-fluid trip-info" >
					<div class="same-height two-columns row">
						<div class="height col-md-6">
							<!-- top image slideshow -->
							<div id="tour-slide">
								<div class="slide">
									<div class="bg-stretch">
										<img src="<?php echo e($tour_detail->featured_image); ?>" alt="image descriprion" height="1104" width="966">
									</div>
								</div>
								<div class="slide">
									<div class="bg-stretch">
										<img src="<?php echo e($tour_detail->featured_image); ?>" alt="image descriprion" height="1104" width="966">
									</div>
								</div>
							</div>
						</div>
						<div class="height col-md-6 text-col">
							<div class="holder">
								<h1 class="small-size"><?php echo e($tour_detail->title); ?></h1>
								<div class="price">
									from <strong><?php echo e($tour_detail->price); ?></strong>
								</div>
								<div class="description">
									<p><?php echo e($tour_detail->overview); ?></p>
								</div>
								<ul class="reviews-info">
									<li>
										<div class="info-left">
											<strong class="title">Reviews</strong>
											<span class="value">75 Reviews</span>
										</div>
										<div class="info-right">
											<div class="star-rating">
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span class="disable"><span class="icon-star"></span></span>
											</div>
											<span class="value">5/5</span>
										</div>
									</li>
									<li>
										<div class="info-left">
											<strong class="title">Vacation Style</strong>
											<span class="value">Adult Group</span>
										</div>
										<div class="info-right">
											<ul class="ico-list">
												<li>
													<span class="icon icon-hiking"></span>
												</li>
												<li>
													<span class="icon icon-mount"></span>
												</li>
												<li>
													<span class="icon icon-camping"></span>
												</li>
											</ul>
											<span class="value"><?php echo e($tour_detail->Tourcategory->title); ?></span>
										</div>
									</li>
									<li>
										<div class="info-left">
											<strong class="title">Activity Level</strong>
											<span class="value">Quite Tough</span>
										</div>
										<div class="info-right">
											<ul class="ico-list">
												<li>
													<span class="icon icon-level3"></span>
												</li>
												<li>
													<span class="icon icon-level5"></span>
												</li>
												<li>
													<span class="icon icon-level7"></span>
												</li>
											</ul>
											<span class="value"><?php echo e($tour_detail->activitylevel); ?>/10</span>
										</div>
									</li>
									<li>
										<div class="info-left">
											<strong class="title">Group Size</strong>
											<span class="value">Medium Grougs</span>
										</div>
										<div class="info-right">
											<ul class="ico-list">
												<li>
													<span class="icon icon-group-small"></span>
												</li>
												<li>
													<span class="icon icon-group-medium"></span>
												</li>
												<li>
													<span class="icon icon-group-large"></span>
												</li>
											</ul>
											<span class="value"><?php echo e($tour_detail->groupsize); ?>/10</span>
										</div>
									</li>
								</ul>
								<div class="btn-holder">
									<a href="#" class="btn btn-lg btn-info">BOOK NOW</a>
								</div>
								<ul class="social-networks social-share">
									<li>
										<a href="#" class="facebook">
											<span class="ico">
												<span class="icon-facebook"></span>
											</span>
											<span class="text">Share</span>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<span class="ico">
												<span class="icon-twitter"></span>
											</span>
											<span class="text">Tweet</span>
										</a>
									</li>
									<li>
										<a href="#" class="google">
											<span class="ico">
												<span class="icon-google-plus"></span>
											</span>
											<span class="text">+1</span>
										</a>
									</li>
									<li>
										<a href="#" class="pin">
											<span class="ico">
												<span class="icon-pin"></span>
											</span>
											<span class="text">Pin it</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<div class="tab-container">
					<nav class="nav-wrap" id="sticky-tab">
						<div class="container">
							<!-- nav tabs -->
							<ul class="nav nav-tabs text-center" role="tablist">
								<li role="presentation" class="active"><a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Overview</a></li>
								<li role="presentation"><a href="#tab02" aria-controls="tab02" role="tab" data-toggle="tab">Itinerary</a></li>
								<li role="presentation"><a href="#tab04" aria-controls="tab04" role="tab" data-toggle="tab">Faq &amp; Review</a></li>
								<li role="presentation"><a href="#tab05" aria-controls="tab05" role="tab" data-toggle="tab">Gallery</a></li>
								<li role="presentation"><a href="#tab06" aria-controls="tab06" role="tab" data-toggle="tab">Dates &amp; Price</a></li>
							</ul>
						</div>
					</nav>
					<!-- tab panes -->
					<div class="container tab-content trip-detail">
						<!-- overview tab content -->
						<div role="tabpanel" class="tab-pane active" id="tab01">
							<div class="row">
								<div class="col-md-6">
									<strong class="header-box">All about the <?php echo e($category); ?></strong>
									<div class="detail">
										<p><?php echo e($tour_detail->overview); ?></p>
									</div>
								</div>
								<div class="col-md-6">
									<strong class="header-box">The tour package inclusions and exclusions at a glance</strong>
									<div class="text-box">
										<div class="holder">
											<strong class="title">Whats included in this tour</strong>
											<span class="sub-title">Items that are covered in the cost of tour price.</span>
											<p><?php echo e($tour_detail->included); ?> </p>
											
										</div>
									</div>
									<div class="text-box not-included">
										<div class="holder">
											<strong class="title">Whats not included in this tour</strong>
											<span class="sub-title">Items that are covered in the cost of tour price.</span>
											<p><?php echo e($tour_detail->not_included); ?> </p>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- itinerary tab content -->
						<div role="tabpanel" class="tab-pane" id="tab02">
							<div class="row">
								<div class="col-md-6">
									<ol class="detail-accordion">
					                    <?php $__currentLoopData = $Tourdetail_itinerarys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Tourdetail_itinerary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li class="">
											<a href="#">
												<strong class="title"><?php echo e($Tourdetail_itinerary->days); ?></strong>
												<span>Return to London</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p><?php echo e($Tourdetail_itinerary->description); ?></p>
												</div>
											</div>
										</li>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</ol>
								</div>
								<div class="col-md-6">
                                  <?php $__currentLoopData = $Tourdetail_gallary_itinerarys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Tourdetail_gallary_itinerary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<article class="img-article article-light">
										<div class="img-wrap">
											<img src="<?php echo e($Tourdetail_gallary_itinerary->image); ?>" alt="image description">
										</div>
										<div class="text-block">
											<h3><a href="#"><?php echo e($category); ?></a></h3>
											<p><?php echo e($tour); ?>.</p>
										</div>
									</article>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
							</div>
						</div>
						<!-- faq and review tab content -->
						<div role="tabpanel" class="tab-pane" id="tab04">
							<div class="row">
								<div class="col-md-6">
									<div class="question-select">
										<select id="tabSelect" class="question">
											<option value="#innerTab1">What kind of footwear is suitable?</option>
											<option value="#innerTab2">What kind of bag is suitable?</option>
											<option value="#innerTab3">What kind of clothes are suitable?</option>
										</select>
										<ul class="nav nav-tabs" id="questionTab">
											<li class="active"><a href="#innerTab1" data-toggle="tab">What kind of footwear wearing is suitable?</a></li>
											<li><a href="#innerTab2" data-toggle="tab">What kind of bag is suitable?</a></li>
											<li><a href="#innerTab3" data-toggle="tab">What kind of clothes wearing is suitable?</a></li>
										</ul>
									</div>
									<div class="tab-wrapper">
										<div role="tabpanel" class="tab-pane active" id="innerTab1">
											<div class="detail">
												<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
												<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
												<p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p>
												<p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. </p>
												<p>Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.</p>
												<p>Ulins aliquam massa nisl quis neque. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. </p>
												<p>Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.</p>
												<p>Ulins aliquam massa nisl quis neque. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. </p>
												<p>Suspendisse gin orci enim.</p>
												<ul class="img-list">
													<li>
														<img src="img/generic/img-12.jpg" height="52" width="101" alt="image description">
													</li>
													<li>
														<img src="img/generic/img-13.jpg" height="97" width="114" alt="image description">
													</li>
													<li>
														<img src="img/generic/img-14.jpg" height="104" width="124" alt="image description">
													</li>
												</ul>
												<div class="reviews-slot v-middle">
													<div class="thumb">
														<a href="#"><img src="img/thumbs/img-04.jpg" height="50" width="50" alt="image description"></a>
													</div>
													<div class="text">
														<strong class="name"><a href="#">Jessica Lambert - Customer Relations</a></strong>
													</div>
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="innerTab2">
											<div class="detail">
												<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
												<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
												<p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p>
												<p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. </p>
												<div class="reviews-slot v-middle">
													<div class="thumb">
														<a href="#"><img src="img/thumbs/img-04.jpg" height="50" width="50" alt="image description"></a>
													</div>
													<div class="text">
														<strong class="name"><a href="#">Jessica Lambert - Customer Relations</a></strong>
													</div>
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="innerTab3">
											<div class="detail">
												<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
												<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
												<p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p>
												<p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. </p>
												<p>Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.</p>
												<p>Ulins aliquam massa nisl quis neque. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. </p>
												<p>Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.</p>
												<p>Ulins aliquam massa nisl quis neque. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. </p>
												<p>Suspendisse gin orci enim.</p>
												<ul class="img-list">
													<li>
														<img src="img/generic/img-12.jpg" height="52" width="101" alt="image description">
													</li>
													<li>
														<img src="img/generic/img-13.jpg" height="97" width="114" alt="image description">
													</li>
													<li>
														<img src="img/generic/img-14.jpg" height="104" width="124" alt="image description">
													</li>
												</ul>
												<div class="reviews-slot v-middle">
													<div class="thumb">
														<a href="#"><img src="img/thumbs/img-04.jpg" height="50" width="50" alt="image description"></a>
													</div>
													<div class="text">
														<strong class="name"><a href="#">Jessica Lambert - Customer Relations</a></strong>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="header-box">
										<a href="#" class="link-right">Writing A Review</a>
										<span class="rate-left">
											<strong class="title">Overall Rating</strong>
											<span class="star-rating">
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span class="disable"><span class="icon-star"></span></span>
											</span>
											<span class="value">4.7/5</span>
										</span>
									</div>
									<div class="comments reviews-body">
										<div class="comment-holder">
											<div class="comment-slot">
												<div class="thumb">
													<a href="#"><img src="img/thumbs/img-05.jpg" height="50" width="50" alt="image description"></a>
												</div>
												<div class="text">
													<header class="comment-head">
														<div class="left">
															<strong class="name">
																<a href="#">Cleona Torez - Spain</a>
															</strong>
															<div class="meta">Reviewed on 14/1/2016</div>
														</div>
														<div class="right">
															<div class="star-rating">
																<span><span class="icon-star"></span></span>
																<span><span class="icon-star"></span></span>
																<span><span class="icon-star"></span></span>
																<span><span class="icon-star"></span></span>
																<span class="disable"><span class="icon-star"></span></span>
															</div>
															<span class="value">4.7/5</span>
														</div>
													</header>
													<div class="des">
														<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
														<div class="link-holder">
															<a href="#">Read Full Review</a>
														</div>
													</div>
												</div>
											</div>
											<div class="comment-slot">
												<div class="thumb">
													<a href="#"><img src="img/thumbs/img-06.jpg" height="50" width="50" alt="image description"></a>
												</div>
												<div class="text">
													<header class="comment-head">
														<div class="left">
															<strong class="name">
																<a href="#">Cleona Torez - Spain</a>
															</strong>
															<div class="meta">Reviewed on 14/1/2016</div>
														</div>
														<div class="right">
															<div class="star-rating">
																<span><span class="icon-star"></span></span>
																<span><span class="icon-star"></span></span>
																<span><span class="icon-star"></span></span>
																<span><span class="icon-star"></span></span>
																<span class="disable"><span class="icon-star"></span></span>
															</div>
															<span class="value">4.7/5</span>
														</div>
													</header>
													<div class="des">
														<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
														<div class="link-holder">
															<a href="#">Read Full Review</a>
														</div>
													</div>
												</div>
											</div>
											<div class="comment-slot">
												<div class="thumb">
													<a href="#"><img src="img/thumbs/img-07.jpg" height="50" width="50" alt="image description"></a>
												</div>
												<div class="text">
													<header class="comment-head">
														<div class="left">
															<strong class="name">
																<a href="#">Cleona Torez - Spain</a>
															</strong>
															<div class="meta">Reviewed on 14/1/2016</div>
														</div>
														<div class="right">
															<div class="star-rating">
																<span><span class="icon-star"></span></span>
																<span><span class="icon-star"></span></span>
																<span><span class="icon-star"></span></span>
																<span><span class="icon-star"></span></span>
																<span class="disable"><span class="icon-star"></span></span>
															</div>
															<span class="value">4.7/5</span>
														</div>
													</header>
													<div class="des">
														<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
														<div class="link-holder">
															<a href="#">Read Full Review</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="link-more text-center">
											<a href="#">Show More Reviews - 75 Reviews</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- gallery tab content -->
						<div role="tabpanel" class="tab-pane" id="tab05">
							<ul class="row gallery-list has-center">
                               <?php $__currentLoopData = $Tourdetail_gallarys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Tourdetail_gallary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="img/gallery/img-10-2.jpg" title="Caption Goes Here">
										<span class="img-holder">
											<img src="<?php echo e($Tourdetail_gallary->image); ?>"  alt="image description" style="height: 250px;">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title"><?php echo e($category); ?></strong>
												<span class="sub-text"><?php echo e($tour); ?></span>
											</span>
										</span>
									</a>
								</li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
							</ul>
						</div>
						<!-- dates and prices tab content -->
						<div role="tabpanel" class="tab-pane" id="tab06">
							<div class="table-container">
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>
													<strong class="date-text">Departure Dates</strong>
												</th>
												<th>
													<strong class="date-text">Price</strong>
												</th>
												<th>
													&nbsp;
												</th>
											</tr>
										</thead>
										<tbody>
                                          <?php $__currentLoopData = $Tourdetail_departures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Tourdetail_departure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td><div class="cell"><div class="middle"><?php echo e(\Carbon\Carbon::parse($Tourdetail_departure->departure_date)->format('d-M-Y')); ?></div></div></td>
												<td><div class="cell"><div class="middle"><?php echo e($Tourdetail_departure->price); ?> </div></div></td>
												<td><div class="cell"><div class="middle">
													<a href="#" class="btn btn-default">BOOK NOW</a>
												</div></div></td>
											</tr>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</tbody>
									</table>
								</div>
								<div class="load-more text-center text-uppercase">
									<a href="#">MORE DATES &amp; PRICES</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- recent block -->
				<aside class="recent-block recent-gray recent-wide-thumbnail">
					<div class="container">
						<h2 class="text-center text-uppercase">RECENTLY VIEWED</h2>
						<div class="row">
							<article class="col-sm-6 col-md-3 article">
								<div class="thumbnail">
									<h3 class="no-space"><a href="#">Everest Basecamp Trek</a></h3>
									<strong class="info-title">Everest Region, Nepal</strong>
									<div class="img-wrap">
										<img src="img/listing/img-31.jpg" height="210" width="250" alt="image description">
									</div>
									<footer>
										<div class="sub-info">
											<span>5 Days</span>
											<span>$299</span>
										</div>
										<ul class="ico-list">
											<li class="pop-opener">
												<a href="#">
													<span class="icon-hiking"></span>
													<span class="popup">
														Hiking
													</span>
												</a>
											</li>
											<li class="pop-opener">
												<a href="#">
													<span class="icon-mountain"></span>
													<span class="popup">
														Mountain
													</span>
												</a>
											</li>
											<li class="pop-opener">
												<a href="#">
													<span class="icon-level5"></span>
													<span class="popup">
														Level 5
													</span>
												</a>
											</li>
										</ul>
									</footer>
								</div>
							</article>
							<article class="col-sm-6 col-md-3 article">
								<div class="thumbnail">
									<h3 class="no-space"><a href="#">Everest Basecamp Trek</a></h3>
									<strong class="info-title">Everest Region, Nepal</strong>
									<div class="img-wrap">
										<img src="img/listing/img-32.jpg" height="210" width="250" alt="image description">
									</div>
									<footer>
										<div class="sub-info">
											<span>5 Days</span>
											<span>$299</span>
										</div>
										<ul class="ico-list">
											<li class="pop-opener">
												<a href="#">
													<span class="icon-hiking"></span>
													<span class="popup">
														Hiking
													</span>
												</a>
											</li>
											<li class="pop-opener">
												<a href="#">
													<span class="icon-mountain"></span>
													<span class="popup">
														Mountain
													</span>
												</a>
											</li>
											<li class="pop-opener">
												<a href="#">
													<span class="icon-level5"></span>
													<span class="popup">
														Level 5
													</span>
												</a>
											</li>
										</ul>
									</footer>
								</div>
							</article>
							<article class="col-sm-6 col-md-3 article">
								<div class="thumbnail">
									<h3 class="no-space"><a href="#">Everest Basecamp Trek</a></h3>
									<strong class="info-title">Everest Region, Nepal</strong>
									<div class="img-wrap">
										<img src="img/listing/img-33.jpg" height="210" width="250" alt="image description">
									</div>
									<footer>
										<div class="sub-info">
											<span>5 Days</span>
											<span>$299</span>
										</div>
										<ul class="ico-list">
											<li class="pop-opener">
												<a href="#">
													<span class="icon-hiking"></span>
													<span class="popup">
														Hiking
													</span>
												</a>
											</li>
											<li class="pop-opener">
												<a href="#">
													<span class="icon-mountain"></span>
													<span class="popup">
														Mountain
													</span>
												</a>
											</li>
											<li class="pop-opener">
												<a href="#">
													<span class="icon-level5"></span>
													<span class="popup">
														Level 5
													</span>
												</a>
											</li>
										</ul>
									</footer>
								</div>
							</article>
							<article class="col-sm-6 col-md-3 article">
								<div class="thumbnail">
									<h3 class="no-space"><a href="#">Everest Basecamp Trek</a></h3>
									<strong class="info-title">Everest Region, Nepal</strong>
									<div class="img-wrap">
										<img src="img/listing/img-34.jpg" height="210" width="250" alt="image description">
									</div>
									<footer>
										<div class="sub-info">
											<span>5 Days</span>
											<span>$299</span>
										</div>
										<ul class="ico-list">
											<li class="pop-opener">
												<a href="#">
													<span class="icon-hiking"></span>
													<span class="popup">
														Hiking
													</span>
												</a>
											</li>
											<li class="pop-opener">
												<a href="#">
													<span class="icon-mountain"></span>
													<span class="popup">
														Mountain
													</span>
												</a>
											</li>
											<li class="pop-opener">
												<a href="#">
													<span class="icon-level5"></span>
													<span class="popup">
														Level 5
													</span>
												</a>
											</li>
										</ul>
									</footer>
								</div>
							</article>
						</div>
					</div>
				</aside>
			</main>
		</div>
		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jatin/Desktop/All project/gallivant-journeys/resources/views/user/tour_detail.blade.php ENDPATH**/ ?>