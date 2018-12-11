<?php 
$this->load->view('admin/includes/header');
//include('includes/header.php');
$this->load->view('admin/includes/sidebar');

 ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Type Video
        <small></small>
      </h1>
      <!--<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>-->
    </section>

    <?php $allvcategory=get_all_vcategory(); ?>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          
            <!--<div class="box-header">
              <h3 class="box-title">CK Editor
                <small>Advanced and full of features</small>
              </h3>
              
            </div>-->
            <!-- /.box-header -->
           
              <form method="post" enctype="multipart/form-data" action="<?=base_url();?>add_type_video_code">
                
                <div class="box box-info">


               <div class="box-header">
                <label for="project_type">Select Video Type:</label>
             

              <select class="form-control" id="video_type" name="video_type">
              <?php foreach($allvcategory->result() as $vcat)  { ?>
              <option value="<?php echo $vcat->category_name;?>"><?php echo $vcat->category_name;?></option>
              <?php } ?>
              <!-- <option value="Elevation">Elevation</option>
              <option value="Interior Design">Interior Design</option>
              <option value="Industrial">Industrial</option>
              <option value="Landscape">Landscape</option>
              <option value="Amenities">Amenities</option>
              <option value="Character Design">Character Design</option>
              <option value="Product Design">Product Design</option>
              <option value="What sets us apart">What sets us apart</option>
              <option value="Real Shoot Integration">Real Shoot Integration</option> -->
              </select>
                </div>

                


             


                <div class="box-header">
                  <label for="exampleInputEmail1">Video Link</label>
                  <input type="text" class="form-control" name="video_link" placeholder="Enter Link">
                </div>

                
               <!--<div class="box-header">
                  <label for="exampleInputEmail1">Team Member Designation</label>
                  <input type="text" class="form-control" name="team_designation" placeholder="Enter Title">
                </div>-->

                <div class="box-header">
              <h5 style="color:#000; font-weight:bold;">Description</h5>
              

                    <textarea id="editor14" name="editor14" rows="10" cols="80">
                    
                    </textarea>
             </div>
              
          
            
             <div class="box-header">
                  <label for="exampleInputEmail1">Upload Front Image</label>
                  <input type="file" class="form-control" name="type_video_image">
                   <br>
                     <span style="color:red;">Upload image less than 50 kb image.</span>
                </div>
                <div id="error_message" style="color:red;">
       
                   <?php echo validation_errors(); ?>
               </div>

            
              
          
                 <div class="form-group">
                 <button type="submit" class="btn btn-primary">Submit <span id="loading_image_club" style="display: none;"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></span</button>
                       
                 </div> 
              </form>
            
         
   


   


          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

<script src="<?= base_url();?>assets/admin/js/jquery-2.2.3.min.js"></script>
<script>
$(function () {

    
   
    CKEDITOR.replace('editor14');
   
    $(".textarea").wysihtml5();




  });
</script>


<?php 
$this->load->view('admin/includes/js');
$this->load->view('admin/includes/footer');
 ?>