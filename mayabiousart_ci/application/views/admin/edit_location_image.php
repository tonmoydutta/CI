<?php 

$this->load->view('admin/includes/header');

//include('includes/header.php');

$this->load->view('admin/includes/sidebar');



 ?>

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Edit Location Image

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

           <?php foreach($edit_location->result() as $row){ ?>

              <form method="post" enctype="multipart/form-data" action="<?=base_url();?>edit_location_image_code">

                <div class="box box-info">



                <div class="box-header">

                <label for="project_type">Select Continent:</label>

              <select class="form-control" id="edit_continent_name" name="edit_continent_name">

              <option value="">Select</option>

              <option <?php if($row->continent_name=="Asia"){ echo 'selected';} ?> value="Asia">Asia</option>

              <option <?php if($row->continent_name=="Africa"){ echo 'selected';} ?> value="Africa">Africa</option>

              <option <?php if($row->continent_name=="Europe"){ echo 'selected';} ?> value="Europe">Europe</option>

              <option <?php if($row->continent_name=="North America"){ echo 'selected';} ?> value="North America">North America</option>

              </select>

                </div>





            <div class="box-header">

                <label for="project_type">Select Country:</label>

              <select class="form-control" id="edit_country_name" name="edit_country_name">

              <option value="">Select</option>

              <?php if($row->continent_name=="Asia"){?>

                     <?php echo getcountry('Asia',$row->country_name);?>

              <?php } ?>

              

              <?php if($row->continent_name=="Africa"){?>

                     <?php echo getcountry('Africa',$row->country_name);?>

              <?php } ?>

              <?php if($row->continent_name=="Europe"){?>

                     <?php echo getcountry('Europe',$row->country_name);?>

              <?php } ?>

              <?php if($row->continent_name=="North America"){?>

                     <?php echo getcountry('North America',$row->country_name);?>

              <?php } ?>

              

              </select>

                </div>



                <div class="box-header">

                <label for="project_type">Select City:</label>

              <select class="form-control" id="edit_state_name" name="edit_state_name">

              <option value="">Select</option>

              <?php if($row->country_name=="India"){?>

                     <?php echo getcity('India',$row->city_name);?>

              <?php } ?>

              

              </select>

                </div>





                

                <!-- <div class="box-header">

                  <label for="exampleInputEmail1">Video Link</label>

                  <input type="text" class="form-control" name="edit_type_video_link" placeholder="Enter Title" value="<?=$row->video_link;?>">

                </div> -->

  

 

            <!--<div class="box-header">

                  <label for="exampleInputEmail1">Team Member Designation</label>

                  <input type="text" class="form-control" name="edit_team_designation" placeholder="Enter Title" value="<?=$row->designation;?>">

                </div>-->

                

           <div class="box-header">

              <h5 style="color:#000; font-weight:bold;">Description</h5>

              



                    <textarea id="editor17" name="editor17" rows="10" cols="80">

                    <?=$row->description;?>

                    </textarea>

             </div>

              
         <div class="box-header">

                  <label for="exampleInputEmail1">Upload Small Image</label>

                  <input type="file" class="form-control" name="edit_location_image_new">

                  <?php 

             if($row->small_image!="")

            {

                  ?>

                  <br><img src="<?=base_url();?>uploads-new/<?=$row->small_image;?>" height=80px; width=100px;>



                  <?php } ?>

                 

                     <span style="color:red;">FUpload image less than 50 kb for small image.</span> 

                </div>
          

            

             <div class="box-header">

                  <label for="exampleInputEmail1">Upload Big Image</label>

                  <input type="file" class="form-control" name="edit_location_image">

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



              <input type="hidden" name="edit_location_slno" value="<?=$row->slno;?>">



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



    

   

    CKEDITOR.replace('editor17');

   

    $(".textarea").wysihtml5();





  });



 $(document).ready(function () {

    $("#edit_continent_name").change(function () {

        var val = $(this).val();

        if (val == "Asia") {

            $("#edit_country_name").html("<option value=''>Select Country</option><option value='India'>India</option><option value='China'>China</option><option value='Pakistan'>Pakistan</option><option value='Bangladesh'>Bangladesh</option><option value='Japan'>Japan</option><option value='Srilanka'>Sri Lanka</option>");

        } else if (val == "Europe") {

            $("#edit_country_name").html("<option value=''>Select Country</option><option value='Russia'>Russia</option><option value='Germany'>Germany</option><option value='U.K'>U.K</option><option value='France'>France</option><option value='Italy'>Italy</option><option value='Netherlands'>Netherlands</option><option value='Sweden'>Sweden</option><option value='Switzerland'>Switzerland</option>");

        } 

        else if (val == "Africa") {

            $("#edit_country_name").html("<option value=''>Select Country</option><option value='Egypt'>Egypt</option><option value='Kenya'>Kenya</option><option value='Morocco'>Morocco</option><option value='Swaziland'>Swaziland</option><option value='Zimbabwe'>Zimbabwe</option>");

        } 



        else if (val == "North America") {

            $("#edit_country_name").html("<option value=''>Select Country</option><option value='U.S'>U.S</option><option value='Canada'>Canada</option><option value='Greenland'>Greenland</option><option value='Bermuda'>Bermuda</option><option value='Saint Pierre & Miquelon'>Saint Pierre & Miquelon</option>");

        }

    });





    $("#edit_country_name").change(function () {

        var val = $(this).val();

        if (val == "India") {

            $("#edit_state_name").html("<option value=''>Select City</option><option value='Mumbai'>Mumbai</option><option value='Delhi'>Delhi</option><option value='Kolkata'>Kolkata</option><option value='Rajasthan'>Rajasthan</option><option value='Hyderabad'>Hyderabad</option><option value='Bangalore'>Bangalore</option><option value='Odisha'>Odisha</option><option value='Pune'>Pune</option><option value='Patna'>Patna</option>");

        }



        else{



          $("#edit_state_name").html("<option value=''>Select City</option>");

        } 

    });

});

</script>



<?php 

$this->load->view('admin/includes/js');

$this->load->view('admin/includes/footer');

 ?>