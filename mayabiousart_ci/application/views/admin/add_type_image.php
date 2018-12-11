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

        Add Type Image

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

           

              <form method="post" enctype="multipart/form-data" action="<?=base_url();?>add_type_code">

                <div class="box box-info">



                





                <div class="box box-info">



                <div class="box-header">

                <label for="project_type">Select Image Category:</label>

              <select class="form-control" id="content_type" name="content_type">

              <option value="">Select</option>

              <?php foreach($image_category->result() as $row){?>

              <option value="<?=$row->category_name;?>"><?=$row->category_name;?></option>

              <?php } ?>

              

              </select>

              

             <!--  <a href="#" id="myBtn"><u>Add Image Category</u></a> -->



                </div>





                <div class="box-header">

                  <label for="exampleInputEmail1">Image Title</label>

                  <input type="text" class="form-control" name="image_title" placeholder="Enter Title">

                </div>



                

               <!--<div class="box-header">

                  <label for="exampleInputEmail1">Team Member Designation</label>

                  <input type="text" class="form-control" name="team_designation" placeholder="Enter Title">

                </div>-->



                <div class="box-header">

              <h5 style="color:#000; font-weight:bold;">Description</h5>

              



                    <textarea id="editor12" name="editor12" rows="10" cols="80">

                    

                    </textarea>

             </div>

              
          <div class="box-header">

                  <label for="exampleInputEmail1">Upload Small Image</label>

                  <input type="file" class="form-control" name="type_image_new">

                  <br>

                     <span style="color:red;">Upload image less than 50 kb for small image.</span>

                </div>
          

            

             <div class="box-header">

                  <label for="exampleInputEmail1">Upload Big Image</label>

                  <input type="file" class="form-control" name="type_image">

                  <br>

                     <span style="color:red;">For better view upload 1600 * 900 resolution image</span>

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



  <div id="myModal" class="modal">



  <!-- Modal content -->

  <div class="modal-content">

    <span class="close">&times;</span>

    <!-- <p>Some text in the Modal..</p> -->

    <form method="post" action="<?=base_url();?>add_image_type_category">

    <div class="box-header">

                  <label for="exampleInputEmail1">Image Category</label>

                  <input type="text" class="form-control" id="image_category" name="image_category" placeholder="Enter Image Category">

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



    

   

    CKEDITOR.replace('editor12');

   

    $(".textarea").wysihtml5();









  });



  //  $(document).ready(function(){

  // $("#image_category_type").click(function(){



    //$("#show_hide_div").show();

//     function pop(){



//     var popup = document.getElementById('myPopup');

//     popup.classList.toggle('show');

// }

//   });





// });

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

</script>





<?php 

$this->load->view('admin/includes/js');

$this->load->view('admin/includes/footer');

 ?>