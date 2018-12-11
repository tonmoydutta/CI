<?php 
$this->load->view('admin/includes/header');
//include('includes/header.php');
$this->load->view('admin/includes/sidebar');

 ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit News Image
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
           <?php foreach($edit_news_list->result() as $row){ ?>
              <form method="post" enctype="multipart/form-data" action="<?=base_url();?>edit_news_code">
                <div class="box box-info">
                <!--<div class="box-header">
                  <label for="exampleInputEmail1">News Title</label>
                  <input type="text" class="form-control" name="news_title" placeholder="Enter Title">
                </div>-->

                
      
              
          
            
             <div class="box-header">
                  <label for="exampleInputEmail1">Upload News Image</label>
                  <input type="file" class="form-control" name="edit_news_image">
                  <?php 
             if($row->image!="")
            {
                  ?>
                  <br><img src="<?=base_url();?>uploads/<?=$row->image;?>" height=80px; width=100px;>

                  <?php } ?>
                  <br>
                     <span style="color:red;">For better view upload 523 * 585 resolution image</span>
                </div>
                <div id="error_message" style="color:red;">
       
                   <?php echo validation_errors(); ?>
               </div>

               
              
              </div>

              <input type="hidden" name="edit_news_slno" value="<?=$row->slno;?>">

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



<?php 
$this->load->view('admin/includes/js');
$this->load->view('admin/includes/footer');
 ?>