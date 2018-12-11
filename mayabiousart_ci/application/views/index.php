<?php //include("includes/header.php"); 

$this->load->view('includes/header');?>
<div id="img_section">
<?php 
  $i=0;
  foreach($category->result() as $row){
    $lastId = $i+1;
    $i++;
  $cat_slno=imageloop($row->category_name);
  $image_exist=image_exist($row->category_name); 
  $cat_slno_vid=videoloop($row->category_name);
  $countimage=count_all($row->category_name);

  //$allimages_video=$image_exist+$countimage;
  $allimages_video=$image_exist;
  
  ?>
<section class="maSec" id="category<?= $row->slno;?>" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="center-bottom">
<h5 class="secHeading"><span><?=$row->category_name;?></span> <font><?php echo $allimages_video;?> Item </font></h5>
<div class="swiper-container">
<div class="progress" role="progressbar"> </div>

<div class="swiper-wrapper swiperProgress">
<?php foreach ($cat_slno as $value) {
        if($value['image']!=""){
        ?>
<a class="proBox swiper-slide" href="uploads/<?=$value['image'];?>" data-fancybox="<?=$value['type'];?>">
<img src="uploads-new/<?=$value['small_image'];?>" />
<div class="caption">
<?=$value['description'];?>
</div>
</a>
<?php } }?>



</div>
<!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>
</section>
<?php } ?>
</div>
<!--<input type="hidden" name="last_id" id="last_id" value="<?=$lastId;?>">-->
<div style="min-height: 20px;"> <span id="last_id" style="display:none;"><?=$lastId;?></span></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>/*<![CDATA[*/
$(document).ready(function(){
  $(".sidemenuType a").click(function(){
    //var a=($(this).parent("li").index()==0)?"":$(this).parent("li").index();
    var a=$(this).attr("abc");
    //alert(a);
    $("#img_section").find("#"+a).prependTo("#img_section")});
  });
  function country_click(a){
      var b=a;
      $("body").removeClass("sideMenuChildrenOpen");
         $.ajax({

                type:"POST",
                url:"<?=base_url();?>show_location_image",
                data:{new_country:b},
                cache:false,
                success:function(c){
                  console.log(c);
                  $("#img_section").hide();
                  $("#video_section").hide();
                  $("#location_image_section").show().html(c);
                }}
                )};
                /*]]>*/
              </script>


<?php  $this->load->view('includes/footer');?>