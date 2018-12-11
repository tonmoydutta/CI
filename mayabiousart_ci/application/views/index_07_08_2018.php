<?php //include("includes/header.php"); 
$this->load->view('includes/header');

?>
<div id="img_section">
<?php foreach($category->result() as $row){

$cat_slno=imageloop($row->category_name);
//$image_exist=image_exist($row->category_name); 
$cat_slno_vid=videoloop($row->category_name);

?>

 
  <section class="maSec" id="category_<?=$row->slno;?>" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="center-bottom">

   
  	<h5 class="secHeading"><span><?=$row->category_name;?></span> <font> </font></h5>
    <div class="progress" role="progressbar"> </div>
  	<div class="maProSlider">
        

 
       <?php foreach ($cat_slno as $value) {
 
        if($value['image']!=""){

        ?>
        <a class="proBox" href="uploads/<?=$value['image'];?>" data-fancybox="<?=$value['type'];?>">
          <img src="uploads/<?=$value['image'];?>" />
          <div class="caption">
              

              <?=$value['description'];?>
          </div>
        </a>
      <?php }

      

         }
      ?>


<?php foreach($cat_slno_vid as $value1){ ?>

<a class="proBox" href="<?=$value1['video_link'];?>" data-fancybox="<?=$value1['type'];?>">
          <img src="uploads/<?=$value1['image'];?>" />
          <div class="caption">
              

              <?=$value1['description'];?>
          </div>
        </a>

<?php } ?>


        

            </div>
         

  </section>
  
  <?php } ?>
</div>

  <div id="video_section" style="display:none;">

   <?php $all_video=show_all_video(); 

foreach($all_video as $value1){ 
$images=explode(",", $value1['images']);

  ?>

<section class="maSec" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="center-bottom">
         
          <h5 class="secHeading"><span><?=$value1['category_name'];?></span><font><?=$value1['videocount'];?> Videos</font></h5>
          <div class="progress" role="progressbar"> </div>
          <div class="maProSlider">

   <?php foreach ($images as $img) { ?>
            
            <a class="proBox" href="<?=$value1['video_link'];?>" data-fancybox="video_<?=$value1['type'];?>">
                <img src="uploads/<?=$img;?>" />
                <div class="caption">
                    
                            <?=$value1['description'];?>
                    
                </div>
              </a>
        <?php } ?>      
              </div>
                

        </section>


<?php 
}
   ?>
  </div>

<div id="location_image_section" style="display:none;">

 
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>


  //function show_type_video(){

     $(document).ready(function(){
    $("#video_click").click(function(event){

      event.preventDefault();


          $("#img_section").hide();
            //$("#img_section").hide();
            $("#video_section").show();

      //    $.ajax({
      //       type:"POST",
      //       url:'<?=base_url();?>show_video_image',
            
      //       cache:false,
      //       success:function(res){

      //         //console.log(res);
      //       $("#img_section").empty();
      //       //$("#img_section").hide();
      //       $("#video_section").html(res);
             
      //       }
                
           
      // });
       });

     $("#image_click").click(function(event){

      event.preventDefault();


          $("#video_section").hide();
            //$("#img_section").hide();
            $("#img_section").show();

          });
  });

       //}

    function country_click(country_name) {

      var country=country_name;
      $("body").removeClass("sideMenuChildrenOpen");

          $.ajax({
                type:"POST",
                url:'<?=base_url();?>show_location_image',
                data:{
                  new_country:country
                },
                cache:false,
                success:function(res){

                  console.log(res);
                
                $("#img_section").hide();
                $("#video_section").hide();
                $("#location_image_section").show().html(res);

                 //alert('SYCO'); 
 
  

  

 
 
  }
                    
               
          });

     // alert(country);
    }


  </script>

<?php  
  
  $this->load->view('includes/footer');

?>
