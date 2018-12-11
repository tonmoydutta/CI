<?php 
$this->load->view('admin/includes/header');
//include('includes/header.php');
$this->load->view('admin/includes/sidebar');

 ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Type Video
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
           <?php foreach($edit_type_video->result() as $row){ ?>
              <form method="post" enctype="multipart/form-data" action="<?=base_url();?>edit_type_video_code">
                <div class="box box-info">

                <div class="box-header">
                <label for="project_type">Select Video Type:</label>
              <select class="form-control" id="edit_video_type" name="edit_video_type">
                <?php foreach($allvcategory->result() as $vcat)  { ?>
              <option value="<?php echo $vcat->category_name;?>" <?php echo ($vcat->category_name==$row->type)? 'selected':'';?>><?php echo $vcat->category_name;?></option>
              <?php } ?>
              
              </select>
                </div>


                
                <div class="box-header">
                  <label for="exampleInputEmail1">Video Link</label>
                  <input type="text" class="form-control" name="edit_type_video_link" placeholder="Enter Title" value="<?=$row->video_link;?>">
                </div>
  
 
            <!--<div class="box-header">
                  <label for="exampleInputEmail1">Team Member Designation</label>
                  <input type="text" class="form-control" name="edit_team_designation" placeholder="Enter Title" value="<?=$row->designation;?>">
                </div>-->
                
           <div class="box-header">
              <h5 style="color:#000; font-weight:bold;">Description</h5>
              

                    <textarea id="editor15" name="editor15" rows="10" cols="80">
                    <?=$row->description;?>
                    </textarea>
             </div>
              
          
            
             <div class="box-header">
                  <label for="exampleInputEmail1">Upload Front Image</label>
                  <input type="file" class="form-control" name="edit_type_video_image">
                  <?php 
             if($row->image!="")
            {
                  ?>
                  <br><img src="<?=base_url();?>uploads-new/<?=$row->image;?>" height=80px; width=100px;>

                  <?php } ?>
                  <!-- <br>
                     <span style="color:red;">For better view upload 1600 * 900 resolution image</span> -->
                </div>
                <div id="error_message" style="color:red;">
       
                   <?php echo validation_errors(); ?>
               </div>

               
              
              </div>

              <input type="hidden" name="edit_type_video_slno" value="<?=$row->slno;?>">

                 <div class="form-group">
                 <button type="submit" class="btn btn-primary">Submit <span id="loading_image_club" style="display: none;"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></span</button>
                       
                 </div> 
              </form>
            
         <?php } ?>
       

          
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

    
   
    CKEDITOR.replace('editor15');
   
    $(".textarea").wysihtml5();


  });
</script>

<?php 
$this->load->view('admin/includes/js');
$this->load->view('admin/includes/footer');
 ?>