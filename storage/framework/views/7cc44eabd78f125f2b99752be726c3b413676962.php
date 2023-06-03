<?php $__env->startSection('content'); ?>
<div style=" background-color: #252525;height: 103px;">
</div>
<main id="main">
   <!-- main tour information -->
   <section class="container-fluid trip-info">
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
                  from <strong><?php echo e($tour_detail->price); ?> ₹</strong>
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
               <!--  -->
               <div class="btn-holder">
                  <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-lg btn-info">BOOK NOW</a>
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
                           <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
                           <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
                           <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p>
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
                           <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
                           <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
                           <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p>
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
                           <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
                           <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
                           <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p>
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
                                 <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
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
                                 <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
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
                                 <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
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
                        <img src="<?php echo e($Tourdetail_gallary->image); ?>" alt="image description" style="height: 250px;">
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
                           <td>
                              <div class="cell">
                                 <div class="middle"><?php echo e(\Carbon\Carbon::parse($Tourdetail_departure->departure_date)->format('d-M-Y')); ?></div>
                              </div>
                           </td>
                           <td>
                              <div class="cell">
                                 <div class="middle"><?php echo e($Tourdetail_departure->price); ?> </div>
                              </div>
                           </td>
                           <td>
                              <div class="cell">
                                 <div class="middle">
                                    <a href="#" class="btn btn-default">BOOK NOW</a>
                                 </div>
                              </div>
                           </td>
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
            <!--  -->
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


   <!-- form -->
   <div id="exampleModal" class="modal fade" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header" style="background-color: #272a32;">
                  <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
                  <h4 class="modal-title text-color text-center">Almost There!</h4>
                  <h4 class="modal-title text-color text-center">Tour Inquiry Form!</h4>
                  <h4 class="modal-title text-color text-center">We need a bit more info to create your itinerary:</h4>
                  <form role="form" method="POST" action="">
                     <div class="row" style=" margin-top:60px; ">
                        <div class="form-group col-md-6 ">
                           <input class="inp" placeholder="Name:" />
                        </div>
                        <div class="form-group col-md-6">
                           <input class="inp" placeholder="Email:" />
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6 ">
                           <input class="inp" placeholder="Trip duration in days: " />
                        </div>
                        <div class="form-group col-md-6">
                           <lable style="color:white;">When ?</lable>
                           <input type="date" class="inp" placeholder="" />
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6 ">
                           <select class=" selecto   trip dark" id="" style="color:white;">
                              <option class="text-s"> Price </option>
                              <option value="$4000 to $5000">$4000 to $5000</option>
                              <option value="$5000 to $6000">$5000 to $6000</option>
                              <option value="$6000 to $7000">$6000 to $7000</option>
                              <option value="$7000 to $8000">$7000 to $8000</option>
                              <option value="$8000 to $10000">$8000 to $10000</option>
                              <option value="$10000+">$10000+</option>
                           </select>
                        </div>
                        <div class="form-group col-md-6">
                           <select class=" selecto   trip dark" id="">
                              <option class="text-s"> Travellers </option>
                              <option value="1 traveler">1 traveler</option>
                              <option value="2 travelers">2 travelers</option>
                              <option value="3 travelers">3 travelers</option>
                              <option value="4 travelers">4 travelers</option>
                              <option value="5 travelers">5 travelers</option>
                              <option value="6 travelers">6 travelers</option>
                              <option value="6+ travelers">6+ travelers</option>
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                           <select class="selecto   trip dark" id="Where do you want to go" name="Where do you want to go">
                              <option value="India" class="text-s"> Where do you want to go</option>
                              <optgroup label="Asia">
                                 <option value="India"> India</option>
                                 <option value="Bhutan">Bhutan</option>
                                 <option value="Nepal">Nepal</option>
                                 <option value="Sri Lanka">Sri Lanka</option>
                                 <option value="Cambodia">Cambodia</option>
                                 <option value="Laos">Laos</option>
                                 <option value="Vietnam">Vietnam</option>
                                 <option value="Malasiya">Malasiya</option>
                                 <option value="UAE">UAE</option>
                                 <option value="Thailand">Thailand</option>
                                 <option value="Indonesia">Indonesia</option>
                                 <option value="Singapore">Singapore</option>
                                 <option value="Maldives">Maldives</option>
                              </optgroup>
                              <optgroup label="Africa">
                                 <option value="Kenya"> Kenya</option>
                                 <option value="Mauritius">Mauritius</option>
                                 <option value="Seychelles">Seychelles</option>
                                 <option value="Tanzania">Tanzania</option>
                              </optgroup>
                              <optgroup label="Europe">
                                 <option value="Europe Mix"> Europe Mix</option>
                                 <option value="France">France</option>
                                 <option value="Greece">Greece</option>
                                 <option value="Iceland">Iceland</option>
                                 <option value="Italy">Italy</option>
                                 <option value="Spain">Spain</option>
                                 <option value="Switzerland">VietSwitzerlandnam</option>
                              </optgroup>
                           </select>
                        </div>
                        <div class="form-group col-md-6">
                           <select class="selecto   trip dark" id="travelers" name="travelers">
                              <option value="Luxury" class="text-s">Select Your Tour Interest</option>
                              <option value="Luxury">Luxury</option>
                              <option value="Wellness">Wellness</option>
                              <option value="Solo / Individual">Solo / Individual</option>
                              <option value="Ladies Only">Ladies Only</option>
                              <option value="Romantic / Honeymoon">Romantic / Honeymoon</option>
                              <option value="Wildlife">Wildlife</option>
                              <option value="Family">Family</option>
                              <option value="Slow Travel">Slow Travel</option>
                              <option value="Island">Island</option>
                              <option value="Small Groups">Small Groups</option>
                              <option value="Experiential Tours">Experiential Tours</option>
                              <option value="Weekend Getaways">Weekend Getaways</option>
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                           <select class="selecto   trip dark" id="travelers" name="Places_for_Adventure">
                              <option value="Leisure " class="text-s">Places for Adventure</option>
                              <option value="Leisure ">Leisure </option>
                              <option value="Beaches ">Beaches </option>
                              <option value="Hill station ">Hill station </option>
                              <option value="Nature ">Nature </option>
                              <option value="Cold Places">Cold Places</option>
                           </select>
                        </div>
                        <div class="form-group col-md-6">
                           <select class="selecto   trip dark" id="travelers" name="Places_for_Adventure">
                              <option value="Leisure " class="text-s">Departure city which you prefer </option>
                              <option value="Delhi ">Delhi </option>
                              <option value="Jaipur ">Jaipur </option>
                              <option value="Ajmer ">Ajmer </option>
                              <option value="Noida ">Noida </option>
                              <option value="Mumbai"> Mumbai</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group ">
                        <select class=" selecto   trip dark" id="">
                           <option class="text-s">What stage of planning are you in?</option>
                           <option value="Still dreaming / researching:Still dreaming / researching">Still dreaming / researching</option>
                           <option value="Definitely traveling, not sure which country yet:Definitely traveling, not sure which country yet">Definitely traveling, not sure which country yet</option>
                           <option value="I want to book a trip:I want to book a trip">I want to book a trip</option>
                        </select>
                     </div>
                     <div class="row" style=" margin-top:60px; ">
                        <div class="form-group col-md-6 phone-input">
                           <select id="country-code" class="selecto   trip dark">
                              <option value="+1" class="text-s">+91</option>
                              <option value="+91">+1</option>
                              <option value="+91">+44</option>
                              <option value="+91">+971</option>
                              <!-- Add more country codes as needed -->
                           </select>
                           <input class="inp" placeholder="Phone Number: " />
                        </div>
                        <div class="form-group col-md-6">
                           <input type="checkbox" class="inp" id="phone-number" name="" value="">
                           <label for="" style="color:white;">Tick If Same Whatsapp Number</label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-lg-6">
                           <div class="form-group">
                              <div>
                                 <input class="inp" placeholder="Whatsapp: " />
                              </div>
                           </div>

                        </div>
                        <div class="form-group col-lg-6">
                           <div class="form-group">
                              <div>
                                 <input class="inp" placeholder="Skype: " />
                              </div>
                           </div>
                           <!-- <div>
                              <div class="checkbox">
                              
                              	<label>
                              
                              		<input type="checkbox" name="Skype"> Skype
                              
                              	</label>
                              
                              </div>
                              
                              </div> -->
                        </div>
                        <div class="form-group ">
                           <div class="form-group col-lg-12">
                              <label class="control-label " style="padding-right:20px; color:white;">Do you want flight to be part of package or not. ?</label>
                              <input type="radio" class="inp" name="flight" value="yes">
                              <label for="radio-checkbox-7" style="padding-right:20px; color:white;"> <span class="text">Yes</span></label>
                              <input type="radio" name="flight" value="no" checked="checked" class="checked">
                              <label for="radio-checkbox-8" style="color:white;">
                                 <span class="text">No</span> </label>
                           </div>
                        </div>
                     </div>
                     <div class="form-group d-flex">
                        <label class="control-label " style="padding-right:20px; color:white;">Any notes or special requests?</label>
                        <input type="radio" name="special_requests" value="yes" id="show">
                        <label for="radio-checkbox-5" style="padding-right:20px; color:white;"> <span class="text">Yes</span></label>
                        <input type="radio" name="special_requests" value="no" checked="checked" id="hide" class="checked">
                        <label for="radio-checkbox-6" style="color:white;">
                           <span class="text">No</span> </label>
                        <div style="padding-top:10px;">
                           <textarea placeholder="Enter notes or special requests..." class="textarea form-control" style="display: none; border: solid; padding:5px; height:150px;">  </textarea>
                        </div>
                     </div>
                     <div class="form-group " style="text-align:center">
                        <div>
                           <input type="button" class="form-control input-lg btn btn-default " class="btn btn-default" style="border: solid; padding:5px; background-color: #35342b; " value=" Submit">
                        </div>
                     </div>
                  </form>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>




</main>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/updateproject/public_html/gallivant-journeys/resources/views/user/tour_detail.blade.php ENDPATH**/ ?>