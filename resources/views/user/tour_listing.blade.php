@extends('layouts.app')
@section('content')
<section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="gridview-sidebar">
   <div class="banner-text">
      <div class="center-text">
         <div class="container">
            <h1>Adventures <?php echo date('Y'); ?></h1>
            <strong class="subtitle">Three Column Adventure Grid View Show.</strong>
            <!-- breadcrumb -->
         </div>
      </div>
   </div>
</section>
<main id="main">
   <!-- content with sidebar -->
   <div class="bg-gray content-with-sidebar grid-view-sidebar">
      <div class="container">
         <div id="two-columns" class="row">
            <!-- sidebar -->
            <aside id="sidebar" class="col-md-4 col-lg-3 sidebar sidebar-list">
               <div class="sidebar-holder">
                  <header class="heading">
                     <h3>FILTER</h3>
                  </header>
                  <div class="accordion">
                     <div class="accordion-group">
                        <div class="panel-heading">
                           <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="collapse1">SELECT REGION</a>
                           </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in" role="tabpanel">
                           <div class="panel-body">
                              <ul class="side-list region-list hovered-list">
                                 <li>
                                    <a href="#">
                                       <span class="ico-holder">
                                          <span class="icon-asia"></span>
                                       </span>
                                       <span class="text">Asia</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="ico-holder">
                                          <span class="icon-arctic"></span>
                                       </span>
                                       <span class="text">Arctic</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="ico-holder">
                                          <span class="icon-middle-east"></span>
                                       </span>
                                       <span class="text">Middle East</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="ico-holder">
                                          <span class="icon-africa"></span>
                                       </span>
                                       <span class="text">Africa</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="ico-holder">
                                          <span class="icon-europe"></span>
                                       </span>
                                       <span class="text">Europe</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="ico-holder">
                                          <span class="icon-north-america"></span>
                                       </span>
                                       <span class="text">North America</span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-group">
                        <div class="panel-heading">
                           <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" href="#collapse2" aria-expanded="true" aria-controls="collapse2">Activity type</a>
                           </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse in" role="tabpanel">
                           <div class="panel-body">
                              <ul class="side-list horizontal-list hovered-list">
                                 <li>
                                    <a href="#">
                                       <span class="icon-hiking-camping"></span>
                                       <span class="popup">
                                          Hiking
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-wildlife"></span>
                                       <span class="popup">
                                          Wildlife
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-boating"></span>
                                       <span class="popup">
                                          Boating
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-food-wine"></span>
                                       <span class="popup">
                                          Food &amp; Wine
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-mountain-biking"></span>
                                       <span class="popup">
                                          Mountain Biking
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-scuba-diving"></span>
                                       <span class="popup">
                                          Scuba Diving
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-peak"></span>
                                       <span class="popup">
                                          Peak
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-bungee"></span>
                                       <span class="popup">
                                          Bungee
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-family"></span>
                                       <span class="popup">
                                          Family
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-budget"></span>
                                       <span class="popup">
                                          Budget
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-culture"></span>
                                       <span class="popup">
                                          Culture
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-diamond"></span>
                                       <span class="popup">
                                          Luxury
                                       </span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-group">
                        <div class="panel-heading">
                           <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" href="#collapse3" aria-expanded="true" aria-controls="collapse3">Landscape</a>
                           </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse in" role="tabpanel">
                           <div class="panel-body">
                              <ul class="side-list horizontal-list hovered-list">
                                 <li>
                                    <a href="#">
                                       <span class="icon-beach"></span>
                                       <span class="popup">
                                          beach
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-jungle"></span>
                                       <span class="popup">
                                          jungle
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-desert"></span>
                                       <span class="popup">
                                          desert
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-mountain"></span>
                                       <span class="popup">
                                          mountain
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-rural"></span>
                                       <span class="popup">
                                          rural
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-urban"></span>
                                       <span class="popup">
                                          urban
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-snow-ice"></span>
                                       <span class="popup">
                                          snow ice
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-water-sea"></span>
                                       <span class="popup">
                                          water
                                       </span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-group">
                        <div class="panel-heading">
                           <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" href="#collapse4" aria-expanded="true" aria- controls="collapse4">Activity level</a>
                           </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse in" role="tabpanel">
                           <div class="panel-body">
                              <ul class="side-list horizontal-list hovered-list">
                                 <li>
                                    <a href="#">
                                       <span class="icon-level1"></span>
                                       <span class="popup">
                                          Level 1
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-level2"></span>
                                       <span class="popup">
                                          Level 2
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-level3"></span>
                                       <span class="popup">
                                          Level 3
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-level4"></span>
                                       <span class="popup">
                                          Level 4
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-level5"></span>
                                       <span class="popup">
                                          Level 5
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-level6"></span>
                                       <span class="popup">
                                          Level 6
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-level7"></span>
                                       <span class="popup">
                                          Level 7
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span class="icon-level8"></span>
                                       <span class="popup">
                                          Level 8
                                       </span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-group">
                        <div class="panel-heading">
                           <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" href="#collapse5" aria-expanded="true" aria-controls="collapse5">Price range</a>
                           </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse in" role="tabpanel">
                           <div class="panel-body">
                              <div id="slider-range"></div>
                              <input type="text" id="amount" readonly class="price-input">
                              <div id="ammount" class="price-input">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-group">
                        <div class="panel-heading">
                           <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" href="#collapse6" aria-expanded="true" aria-controls="collapse6">community poll</a>
                           </h4>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse in" role="tabpanel">
                           <div class="panel-body">
                              <strong class="title">What shoes do your prefer on hiking trips?</strong>
                              <ul class="side-list check-list">
                                 <li>
                                    <label for="check1" class="custom-checkbox">
                                       <input id="check1" type="checkbox">
                                       <span class="check-input"></span>
                                       <span class="check-label">Hiking Boots</span>
                                    </label>
                                 </li>
                                 <li>
                                    <label for="check2" class="custom-checkbox">
                                       <input id="check2" type="checkbox">
                                       <span class="check-input"></span>
                                       <span class="check-label">Hiking Boots</span>
                                    </label>
                                 </li>
                                 <li>
                                    <label for="check3" class="custom-checkbox">
                                       <input id="check3" type="checkbox">
                                       <span class="check-input"></span>
                                       <span class="check-label">Hiking Boots</span>
                                    </label>
                                 </li>
                                 <li>
                                    <label for="check4" class="custom-checkbox">
                                       <input id="check4" type="checkbox">
                                       <span class="check-input"></span>
                                       <span class="check-label">Hiking Boots</span>
                                    </label>
                                 </li>
                              </ul>
                              <strong class="sub-link"><a href="#">CAST YOUR VOTE</a></strong>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </aside>
            <div id="content" class="col-md-8 col-lg-9">
               <div class="filter-option filter-box">
                  <strong class="result-info">179 TRIPS MATCHES YOUR SEARCH</strong>
                  <div class="layout-holder">
                     <div class="layout-action">
                        <a href="#" class="link link-list"><span class="icon-list"></span></a>
                        <a href="#" class="link link-grid active"><span class="icon-grid"></span></a>
                     </div>
                     <div class="select-holder">
                        <div class="select-col">
                           <select class="filter-select sort-select">
                              <option value="sort">Sort Order</option>
                              <option value="sort">Price</option>
                              <option value="sort">Recent</option>
                              <option value="sort">Popular</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="content-holder content-sub-holder">
                  <div class="row db-3-col">
                     @foreach($tour_listings as $tour_listing)
                     @php
                     $string_title = $tour_listing->title ?? '';
                     $string_category = $tour_listing->Tourcategory->title ?? '';
                     $popularString = str_replace(' ', '-', trim($string_title));
                     $popularString_category = str_replace(' ', '-', trim($string_category));
                     @endphp
                     <article class="col-md-6 col-lg-4 article has-hover-s1 thumb-full">
                        <div class="thumbnail">
                           <div class="img-wrap">
                              <img src="{{$tour_listing->featured_image}}" height="228" width="350" alt="image description">
                           </div>
                           <h3 class="small-space"><a href="{{Route('tour_detail',['category_name'=>$popularString_category,'tour_name'=>$popularString,'id'=>base64_encode($tour_listing->id) ])}}">{{$tour_listing->Tourcategory->title}}</a></h3>
                           <span class="info">{{$tour_listing->title}}</span>
                           <aside class="meta">
                              <span class="country">
                                 <span class="icon-world"> </span>12 Countries
                              </span>
                              <span class="activity">
                                 <span class="icon-acitivities"> </span>79 Activities
                              </span>
                           </aside>
                           <p>{{$tour_listing->overview}}.</p>
                           <a href="{{Route('tour_detail',['category_name'=>$popularString_category,'tour_name'=>$popularString,'id'=>base64_encode($tour_listing->id) ])}}" class="btn btn-default">explore</a>
                           <footer>
                              <ul class="social-networks">
                                 <li><a href="#"><span class="icon-twitter"></span></a></li>
                                 <li><a href="#"><span class="icon-google-plus"></span></a></li>
                                 <li><a href="#"><span class="icon-facebook"></span></a></li>
                                 <li><a href="#"><span class="icon-linkedin"></span></a></li>
                              </ul>
                              <span class="price">from <span>{{$tour_listing->price}}</span></span>
                           </footer>
                        </div>
                     </article>
                     @endforeach
                  </div>
               </div>
               <!-- pagination wrap -->
               <nav class="pagination-wrap">
                  <div class="btn-prev">
                     <a href="#" aria-label="Previous">
                        <span class="icon-angle-right"></span>
                     </a>
                  </div>
                  <ul class="pagination">
                     <li><a href="#">1</a></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li class="active"><a href="#">4</a></li>
                     <li><a href="#">5</a></li>
                     <li>...</li>
                     <li><a href="#">7</a></li>
                  </ul>
                  <div class="btn-next">
                     <a href="#" aria-label="Previous">
                        <span class="icon-angle-right"></span>
                     </a>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </div>
   <!-- recent block -->
   <aside class="recent-block recent-list recent-wide-thumbnail">
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
@endsection