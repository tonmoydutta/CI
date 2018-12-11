<?php 
$this->load->view('admin/includes/header');
//include('includes/header.php');
$this->load->view('admin/includes/sidebar');

 ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Team
        <small></small>
      </h1>
      <!--<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>-->
    </section>

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
           
              <form method="post" enctype="multipart/form-data" action="<?=base_url();?>add_team_code">
                <div class="box box-info">
                <div class="box-header">
                  <label for="exampleInputEmail1">Team Member Name</label>
                  <input type="text" class="form-control" name="team_name" placeholder="Enter Title">
                </div>

                
               <div class="box-header">
                  <label for="exampleInputEmail1">Team Member Designation</label>
                  <input type="text" class="form-control" name="team_designation" placeholder="Enter Title">
                </div>

                <div class="box-header">
              <h5 style="color:#000; font-weight:bold;">Description</h5>
              

                    <textarea id="editor8" name="editor8" rows="10" cols="80">
                    
                    </textarea>
             </div>
              
          
            
             <div class="box-header">
                  <label for="exampleInputEmail1">Upload Publication Image</label>
                  <input type="file" class="form-control" name="team_image">
                  <br>
                     <span style="color:red;">For better view upload 430 * 430 resolution image</span>
                </div>
                <div id="error_message" style="color:red;">
       
                   <?php echo validation_errors(); ?>
               </div>

                <!--<div class="box-header">
               <label for="project_type">Select Image Type:</label>
              <select class="form-control" id="project_type" name="project_type">
              <option value="All">Select</option>
              <option value="Exterior">Exterior</option>
              <option value="Interior">Interior</option>
              
              </select>
             </div>--> 
            
              
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

    
   
    CKEDITOR.replace('editor8');
   
    $(".textarea").wysihtml5();


  });
</script>
<?php 
$this->load->view('admin/includes/js');
$this->load->view('admin/includes/footer');
 ?>