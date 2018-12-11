<?php 

$this->load->view('admin/includes/header');

//include('includes/header.php');

$this->load->view('admin/includes/sidebar');



 ?>

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Add Location Image

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

           

              <form method="post" enctype="multipart/form-data" action="<?=base_url();?>add_location_image_code">

                <div class="box box-info">



                





                <div class="box box-info">



                <div class="box-header">

                <label for="project_type">Select Continent:</label>

              <select class="form-control" id="continent_name" name="continent_name">

              <option value="">Select</option>

              <option value="Asia">Asia</option>

              <option value="Africa">Africa</option>

              <option value="Europe">Europe</option>

              <option value="North America">North America</option>

              </select>

                </div>





            <div class="box-header">

                <label for="project_type">Select Country:</label>

              <select class="form-control" id="country_name" name="country_name">

              <option value="">Select</option>

              

              </select>

                </div>



                <div class="box-header">

                <label for="project_type">Select City:</label>

              <select class="form-control" id="state_name" name="state_name">

              <option value="">Select</option>

              

              </select>

                </div>

             





                <!-- <div class="box-header">

                  <label for="exampleInputEmail1">Image Title</label>

                  <input type="text" class="form-control" name="image_title" placeholder="Enter Title">

                </div> -->



                

               <!--<div class="box-header">

                  <label for="exampleInputEmail1">Team Member Designation</label>

                  <input type="text" class="form-control" name="team_designation" placeholder="Enter Title">

                </div>-->



                <div class="box-header">

              <h5 style="color:#000; font-weight:bold;">Description</h5>

              



                    <textarea id="editor16" name="editor16" rows="10" cols="80">

                    

                    </textarea>

             </div>

              

          <div class="box-header">

                  <label for="exampleInputEmail1">Upload Small Image</label>

                  <input type="file" class="form-control" name="location_image_new">

                  <br>

                     <span style="color:red;">Upload image less than 50 kb for small image.</span>

                </div>

            

             <div class="box-header">

                  <label for="exampleInputEmail1">Upload Big Image</label>

                  <input type="file" class="form-control" name="location_image">

                  <br>

                     <span style="color:red;">For better view upload 1600 * 900 resolution image.</span>

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



    

   

    CKEDITOR.replace('editor16');

   

    $(".textarea").wysihtml5();









  });





$(document).ready(function () {

    $("#continent_name").change(function () {

        var val = $(this).val();

        if (val == "Asia") {

            $("#country_name").html("<option value=''>Select Country</option><option value='India'>India</option><option value='China'>China</option><option value='Pakistan'>Pakistan</option><option value='Bangladesh'>Bangladesh</option><option value='Japan'>Japan</option><option value='Srilanka'>Sri Lanka</option><option value='Dubai'>Dubai</option>");

        } else if (val == "Europe") {

            $("#country_name").html("<option value=''>Select Country</option><option value='Russia'>Russia</option><option value='Germany'>Germany</option><option value='U.K'>U.K</option><option value='France'>France</option><option value='Italy'>Italy</option><option value='Netherlands'>Netherlands</option><option value='Sweden'>Sweden</option><option value='Switzerland'>Switzerland</option>");

        } 

        else if (val == "Africa") {

            $("#country_name").html("<option value=''>Select Country</option><option value='Egypt'>Egypt</option><option value='Kenya'>Kenya</option><option value='Morocco'>Morocco</option><option value='Swaziland'>Swaziland</option><option value='Zimbabwe'>Zimbabwe</option>");

        } 



        else if (val == "North America") {

            $("#country_name").html("<option value=''>Select Country</option><option value='U.S'>U.S</option><option value='Canada'>Canada</option><option value='Greenland'>Greenland</option><option value='Bermuda'>Bermuda</option><option value='Saint Pierre & Miquelon'>Saint Pierre & Miquelon</option>");

        }

    });





    $("#country_name").change(function () {

        var val = $(this).val();

        if (val == "India") {

            $("#state_name").html("<option value=''>Select City</option><option value='Mumbai'>Mumbai</option><option value='Delhi'>Delhi</option><option value='Kolkata'>Kolkata</option><option value='Jaipur'>Jaipur</option><option value='Hyderabad'>Hyderabad</option><option value='Bangalore'>Bangalore</option><option value='Bhubaneswar'>Bhubaneswar</option><option value='Pune'>Pune</option><option value='Patna'>Patna</option><option value='Chennai'>Chennai</option><option value='Chandigarh'>Chandigarh</option><option value='Ahmedabad'>Ahmedabad</option><option value='Surat'>Surat</option><option value='Indore'>Indore</option><option value='Lucknow'>Lucknow</option><option value='Nagpur'>Nagpur</option><option value='Amritsar'>Amritsar</option><option value='Guwahati'>Guwahati</option><option value='Goa'>Goa</option>");

        } 

    });

});









</script>





<?php 

$this->load->view('admin/includes/js');

$this->load->view('admin/includes/footer');

 ?>