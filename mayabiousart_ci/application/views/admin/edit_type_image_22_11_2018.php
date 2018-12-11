<?php 

$this->load->view('admin/includes/header');

//include('includes/header.php');

$this->load->view('admin/includes/sidebar');



 ?>

 <style>





/* The Modal (background) */

.modal {

    display: none; /* Hidden by default */

    position: fixed; /* Stay in place */

    z-index: 1; /* Sit on top */

    padding-top: 100px; /* Location of the box */

    left: 0;

    top: 0;

    width: 100%; /* Full width */

    height: 100%; /* Full height */

    overflow: auto; /* Enable scroll if needed */

    background-color: rgb(0,0,0); /* Fallback color */

    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */

}



/* Modal Content */

.modal-content {

    background-color: #fefefe;

    margin: auto;

    padding: 20px;

    border: 1px solid #888;

    width: 45%;

}



/* The Close Button */

.close {

    color: #aaaaaa;

    float: right;

    font-size: 28px;

    font-weight: bold;

}



.close:hover,

.close:focus {

    color: #000;

    text-decoration: none;

    cursor: pointer;

}

</style>

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Edit Type Image

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

           <?php foreach($edit_type->result() as $row){ ?>

              <form method="post" enctype="multipart/form-data" action="<?=base_url();?>edit_type_code">

                <div class="box box-info">



              <div class="box-header">

              <label for="project_type">Select Image Category:</label>

              <select class="form-control" id="edit_content_type" name="edit_content_type">

              <!-- <option <?php //if ($row->type == "" ) //echo 'selected' ; ?> value="">Select</option> -->

             

             <?php foreach($image_category->result() as $cat){ ?>

              <option <?php if ($row->type == "$cat->category_name" ) echo 'selected' ; ?> value="<?=$cat->category_name;?>"><?=$cat->category_name;?></option>

              <?php } ?>

              





              </select>



              <!-- <a href="#" id="myBtn"><u>Add Image Category</u></a> -->

                </div>





                

                <div class="box-header">

                  <label for="exampleInputEmail1">Image Title</label>

                  <input type="text" class="form-control" name="edit_type_title" placeholder="Enter Title" value="<?=$row->title;?>">

                </div>

  

 

            <!--<div class="box-header">

                  <label for="exampleInputEmail1">Team Member Designation</label>

                  <input type="text" class="form-control" name="edit_team_designation" placeholder="Enter Title" value="<?=$row->designation;?>">

                </div>-->

                

           <div class="box-header">

              <h5 style="color:#000; font-weight:bold;">Description</h5>

              



                    <textarea id="editor13" name="editor13" rows="10" cols="80">

                    <?=$row->description;?>

                    </textarea>

             </div>

              
        <div class="box-header">

                  <label for="exampleInputEmail1">Upload Small Image</label>

                  <input type="file" class="form-control" name="edit_type_image_new">

                  <?php 

             if($row->small_image!="")

            {

                  ?>

                  <br><img src="<?=base_url();?>uploads-new/<?=$row->small_image;?>" height=80px; width=100px;>



                  <?php } ?>

                  <br>

                     <span style="color:red;">Upload image less than 50 kb for small image.</span>

                </div>
          

            

             <div class="box-header">

                  <label for="exampleInputEmail1">Upload Big Image</label>

                  <input type="file" class="form-control" name="edit_type_image">

                  <?php 

             if($row->image!="")

            {

                  ?>

                  <br><img src="<?=base_url();?>uploads/<?=$row->image;?>" height=80px; width=100px;>



                  <?php } ?>

                  <br>

                     <span style="color:red;">For better view upload 1600 * 900 resolution image</span>

                </div>

                <div id="error_message" style="color:red;">

       

                   <?php echo validation_errors(); ?>

               </div>



               

              

              </div>



              <input type="hidden" name="edit_type_slno" value="<?=$row->slno;?>">



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





  <div id="myModal" class="modal">



  <!-- Modal content -->

  <div class="modal-content">

    <span class="close">&times;</span>

    <!-- <p>Some text in the Modal..</p> -->

    <form method="post" id="edit_category_name">

    <div class="box-header">

                  <label for="exampleInputEmail1">Image Category</label>

                  <input type="text" class="form-control" id="image_category" name="edit_image_category" placeholder="Enter Image Category">

                </div>



                <div class="form-group">

                 <button type="submit" class="btn btn-primary">Submit</button>

                       

                 </div>

                 </form>

  </div>



</div>



<script src="<?= base_url();?>assets/admin/js/jquery-2.2.3.min.js"></script>

<script>

$(function () {



    

   

    CKEDITOR.replace('editor13');

   

    $(".textarea").wysihtml5();





  });

</script>



<script>



var modal = document.getElementById('myModal');





var btn = document.getElementById("myBtn");





var span = document.getElementsByClassName("close")[0];





btn.onclick = function() {

    modal.style.display = "block";

}





span.onclick = function() {

    modal.style.display = "none";

}





window.onclick = function(event) {

    if (event.target == modal) {

        modal.style.display = "none";

    }

}





$(document).ready(function(){

$("#edit_category_name").submit(function(e) {







  var cat=$("#image_category").val();



  //alert(cat);



  $.ajax({

            type        : 'POST', 

            url         : '<?=base_url();?>edit_category', 

            data        :{

                          new_cat:cat

                         }, 

           success      :function(res) {



          if(res==1){

            alert('Category Name Exists.');

            return false;

          }



          else{



            alert('Category Added Successfully.');



            window.location.reload();

          }



           }

                      

        });



});



});

</script>



<?php 

$this->load->view('admin/includes/js');

$this->load->view('admin/includes/footer');

 ?>