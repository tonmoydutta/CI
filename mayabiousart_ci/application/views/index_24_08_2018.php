<?php //include("includes/header.php"); 

$this->load->view('includes/header');?>
<div id="img_section">
<?php 
  $i=0;
  foreach($category->result() as $row){
    $i++;
  $cat_slno=imageloop($row->category_name);
  //$image_exist=image_exist($row->category_name); 
  $cat_slno_vid=videoloop($row->category_name);
  ?>
<section class="maSec" id="category<?= $i;?>" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="center-bottom">
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
<?php } }?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>/*<![CDATA[*/$(document).ready(function(){$(".sidemenuType a").click(function(){var a=($(this).parent("li").index()==0)?"":$(this).parent("li").index();$("#img_section").find("#category"+a).prependTo("#img_section")})});function country_click(a){var b=a;$("body").removeClass("sideMenuChildrenOpen");$.ajax({type:"POST",url:"<?=base_url();?>show_location_image",data:{new_country:b},cache:false,success:function(c){console.log(c);$("#img_section").hide();$("#video_section").hide();$("#location_image_section").show().html(c)}})};/*]]>*/</script>
<?php  $this->load->view('includes/footer');?>