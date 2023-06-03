<?php $__env->startSection('content'); ?>
<div class="page-body">
<div class="container-fluid">
   <div class="page-header">
      <div class="row">
         <div class="col-lg-6">
            <h3>Tour Details Add</h3>
         </div>
         <div class="col-lg-6">
         </div>
      </div>
   </div>
</div>
<div class="container-fluid">
   <div class="card">
      <div class="card-body">
      <form class="form-ad"  method="POST" action="<?php echo e(route('tourdetail.store')); ?>">
       <?php echo csrf_field(); ?>
         <div class="row">
            <div class="col-md-4">
               <div class="mb-3">
                  <label>Title</label>
                  <input class="form-control" type="text" name="title"  placeholder=""/>
               </div>
            </div>
            <div class="col-md-4">
               <div class="mb-3">
                  <label>Price</label>
                  <input class="form-control" type="text"  name="price" placeholder=""/>
               </div>
            </div>
            <div class="col-md-4">
               <div class="mb-3">
                  <label>Location</label>
                  <input class="form-control" type="text"  name="location" placeholder=""/>
               </div>
            </div>
        </div>


           <div class="row">
               <div class="col-md-4">
                  <div class="mb-3">
                     <label>Vacation style</label>
                     <select class="form-select" name="tourcategory_id">
                          <option value="">Select vacation style</option>
                        <?php $__currentLoopData = $tourdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tourdetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($tourdetail->id); ?>"><?php echo e($tourdetail->title); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="mb-3">
                     <label>Activity Level</label>
                     <select class="form-select" name="activitylevel">
                         <option value="">Select activity level</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="mb-3">
                     <label>Group Size</label>
                     <select class="form-select" name="groupsize">
                        <option value="">Select group Size</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                     </select>
                  </div>
               </div>
                <div class="col-md-4">
                  <div class="mb-3">
            <label>Upload Feature Image</label>
            <input type="file" name="pdf" class="form-control"/>
         </div>
         </div>
            </div>
         </div>
   </div>
</div>
<div class="container-fluid">
<div class="card">
<div class="card-body">
<ul class="nav nav-tabs d-none d-lg-flex" id="myTab" role="tablist">
   <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Overview</button>
   </li>
   <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Itinerary</button>
   </li>
   <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Gallary</button>
   </li>
   <li class="nav-item" role="presentation">
      <button class="nav-link" id="depart-tab" data-bs-toggle="tab" data-bs-target="#depart-tab-pane" type="button" role="tab" aria-controls="depart-tab-pane" aria-selected="false">Departure</button>
   </li>
</ul>
<div class="tab-content accordion" id="myTabContent">
<div class="tab-pane fade show active accordion-item" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
   
   <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block" aria-labelledby="headingOne" data-bs-parent="#myTabContent">
      <div class="accordion-body">
         <div class="form-group">
            <label>Overview</label>
            <textarea class="form-control summernote" name="overview"></textarea>
         </div>
         <div class="form-group">
            <label>Included</label>
            <textarea class="form-control summernote" name="included"></textarea>
         </div>
         <div class="form-group">
            <label>Not Included</label>
            <textarea class="form-control summernote" name="notincluded"></textarea>
         </div>
         <div class="form-group text-center">
            <button type="submit" class="btn btn-success btn-sm">Submit</button>
         </div>
      </div>
   </div>
</div>
<div class="tab-pane fade accordion-item" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
   <div id="collapseTwo" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTwo" data-bs-parent="#myTabContent">
      <div class="accordion-body">
         <div class="container my-4">

           
               <div id="dynamic-days-1" class="form-group dynamic-days">
                  <label for="days" class="font-weight-bold">Day 1</label>
                  <input type="text" id="days" class="form-control" name="days[]">
                  <div class="form-group">
                     <label>Editor</label>
                     <textarea class="form-control summernote-1" name="description[]"></textarea>
                  </div>
               </div>
               <div class="clearfix mt-4">
                  <button type="button" id="add-button" class="btn btn-secondary float-left text-uppercase shadow-sm"><i class="fas fa-plus fa-fw"></i> Add</button>
                  <button type="button" id="remove-button" class="btn btn-secondary float-left text-uppercase ml-1" disabled="disabled"><i class="fas fa-minus fa-fw"></i> Remove</button>
                  <button type="submit" class="btn btn-primary float-right text-uppercase shadow-sm">Submit</button>
               </div>
        
         </div>
      </div>
   </div>
</div>
<div class="tab-pane fade accordion-item" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
   <h2 class="accordion-header d-lg-none" id="headingThree">
   </h2>
   <div id="collapseThree" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingThree" data-bs-parent="#myTabContent">
      <div class="accordion-body">
         <!--<div class="form-group">-->
         <!--   <label>Upload Image</label>-->
         <!--   <input type="file" name="image" class="form-control"/>-->
         <!--</div>-->
         <!--<div class="form-group text-center">-->
         <!--   <button type="submit" class="btn btn-success btn-sm">Submit</button>-->
         <!--</div>-->
          <div class="row justify-content-center">
           <div class="card" style="margin-top: 4%">
               <div class="card-header bg-secondary dark bgsize-darken-4 white card-header">
                   <h4 class="text-white">Laravel 7+ Multiple Image File Upload with Live Preview</h4>
               </div>
               <div class="card-body">
                       <input type="file" id="file-input" onchange="loadPreview(this)" name="image[]"   multiple/>
                       <span class="text-danger"></span>
                       <div id="thumb-output"></div>
                       <br>
                       <button type="submit" class="btn btn-success">Submit</button>
               </div>
           </div>
       </div>
      </div>
   </div>
</div>
<!-- depart -->
<div class="tab-pane fade accordion-item" id="depart-tab-pane" role="tabpanel" aria-labelledby="depart-tab" tabindex="0">
<h2 class="accordion-header d-lg-none" id="headingfour">
  
</h2>
<div id="collapsefour" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingfour" data-bs-parent="#myTabContent">
<div class="accordion-body">
   <div class="container my-4">
         <div id="dynamic-days-depar-1" class="form-group dynamic-days-depar row">
            <div class="col-md-4">
               <label>Date</label>
               <input class="form-control" id="depart" name="depart[]" type="date" placeholder=""/>
            </div>
            <div class="col-md-4">
               <label>Price</label>
               <input class="form-control" type="number"   placeholder=""/>
            </div>
            <div class="col-md-4">
               <label>Seats</label>
               <input class="form-control" type="number"   placeholder=""/>
            </div>
         </div>
         <div class="clearfix mt-4">
            <button type="button" id="add-button-depar" class="btn btn-secondary float-left text-uppercase shadow-sm-depar"><i class="fas fa-plus fa-fw"></i> Add</button>
            <button type="button" id="remove-button-depar" class="btn btn-secondary float-left text-uppercase ml-1" disabled="disabled"><i class="fas fa-minus fa-fw"></i> Remove</button>
            <button type="submit" class="btn btn-primary float-right text-uppercase ">Submit</button>
         </div>
      </form>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- depart -->
<!-- new -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script>
   function loadPreview(input){
       var data = $(input)[0].files; //this file data
       $.each(data, function(index, file){
           if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
               var fRead = new FileReader();
               fRead.onload = (function(file){
                   return function(e) {
                       var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image thumb element
                       $('#thumb-output').append(img);
                   };
               })(file);
               fRead.readAsDataURL(file);
           }
       });
   }
</script>
<script>
    $(document).ready(function(){
    var buttonAdd = $("#add-button");
    var buttonRemove = $("#remove-button");
    var className = ".dynamic-days";
    var count = 0;
    var days= "";
    var maxDays = 9999;
    
    function totalDays() {
     return $(className).length;
    }
    
    function addNewDays() {
     count = totalDays() + 1;
    days= $("#dynamic-days-1").clone();
    days.attr("id", "dynamic-days-" + count);
    days.children("label").text("Day " + count);
    days.find("input").val("");
    days.find(".note-editable").html("");
     $(className + ":last").after($(days));
    }
    
    function removeLastDays() {
      if (totalDays() > 1) {
         $(className + ":last").remove();
      }
    }
    
    function enableButtonRemove() {
     if (totalDays() === 2) {
       buttonRemove.removeAttr("disabled");
       buttonRemove.addClass("shadow-sm");
     }
    }
    
    function disableButtonRemove() {
     if (totalDays() === 1) {
       buttonRemove.attr("disabled", "disabled");
       buttonRemove.removeClass("shadow-sm");
     }
    }
    
    function disableButtonAdd() {
     if (totalDays() === maxDays) {
       buttonAdd.attr("disabled", "disabled");
       buttonAdd.removeClass("shadow-sm");
     }
    }
    
    function enableButtonAdd() {
     if (totalDays() === (maxDays - 1)) {
       buttonAdd.removeAttr("disabled");
       buttonAdd.addClass("shadow-sm");
     }
    }
    
    buttonAdd.click(function() {
     addNewDays();
     enableButtonRemove();
     disableButtonAdd();
    });
    
    buttonRemove.click(function(){
     removeLastDays();
     disableButtonRemove();
     enableButtonAdd();
    });
    });
 </script>
<script>
    $(document).ready(function() {
    var buttonAdd = $("#add-button-depar");
    var buttonRemove = $("#remove-button-depar");
    var className = ".dynamic-days-depar";
    var count = 0;
    var days= "";
    var maxDays = 9999;
    
    function totalDays() {
     return $(className).length;
    }
    
    function addNewDays() {
     count = totalDays() + 1;
    days= $("#dynamic-days-depar-1").clone();
    days.attr("id", "dynamic-days-depar-" + count);
    days.children("label").text("days " + count);
    days.find("input").val("");
     $(className + ":last").after($(days));
    }
    
    function removeLastDays() {
     if (totalDays() > 1) {
       $(className + ":last").remove();
     }
    }
    
    function enableButtonRemove() {
     if (totalDays() === 2) {
       buttonRemove.removeAttr("disabled");
       buttonRemove.addClass("shadow-sm-depar");
     }
    }
    
    function disableButtonRemove() {
     if (totalDays() === 1) {
       buttonRemove.attr("disabled", "disabled");
       buttonRemove.removeClass("shadow-sm-depar");
     }
    }
    
    function disableButtonAdd() {
     if (totalDays() === maxDays) {
       buttonAdd.attr("disabled", "disabled");
       buttonAdd.removeClass("shadow-sm-depar");
     }
    }
    
    function enableButtonAdd() {
     if (totalDays() === (maxDays - 1)) {
       buttonAdd.removeAttr("disabled");
       buttonAdd.addClass("shadow-sm-depar");
     }
    }
    
    buttonAdd.click(function() {
     addNewDays();
     enableButtonRemove();
     disableButtonAdd();
    });
    
    buttonRemove.click(function(){
     removeLastDays();
     disableButtonRemove();
     enableButtonAdd();
    });
    });
</script>
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
     

      $('.summernote-1').summernote({
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
<?php echo $__env->make('admin.layout.adminapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jatin/Desktop/All project/gallivant-journeys/resources/views/admin/tourdetails/create.blade.php ENDPATH**/ ?>