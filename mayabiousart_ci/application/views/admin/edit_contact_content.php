<?php 

$this->load->view('admin/includes/header');
//include('includes/header.php');
$this->load->view('admin/includes/sidebar');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Contact Content
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
          
    <?php
           foreach($edit_contact_content->result() as $row){

    ?>       

              <form action="<?=base_url();?>update_contact" method="post">
                <div class="box box-info">
                <!-- <div class="box-header">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" name="enter_title" id="enter_title" placeholder="Enter Title" value="<?=$row->title;?>">
                </div> -->

                
      
          
            <div class="box-header">
              <h5 style="color:#000; font-weight:bold;">Content</h5>
              

                    <textarea id="editor6" name="editor6" rows="10" cols="80">
                    <?=$row->content;?>
                    </textarea>
             </div>
            
      <input type="hidden" name="e_slno" value="<?=$row->slno;?>">
      
          </div>
                 <div class="form-group">
                 <button type="submit" class="btn btn-primary">Submit <span id="loading_image_club" style="display: none;"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></span</button>
                       
                 </div>
            
              </form>
        <?php } ?>    
        
            <div stle="color:red;"><?php if(!empty($errormsg)){?>
        <?=$errormsg;
       }
        ?>

      </div>
       

          
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

    
   
    CKEDITOR.replace('editor6');
   
    $(".textarea").wysihtml5();


  });

</script>

  <?php 
 $this->load->view('admin/includes/js');
 $this->load->view('admin/includes/footer');
 //$this->load->view('admin/includes/common');
 ?>

 