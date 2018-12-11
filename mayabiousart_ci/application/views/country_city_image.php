<?php //include("includes/header.php"); 

$this->load->view('includes/header');?>

<?php foreach ($location_image as $value) { 

    $images=explode(",", $value['images']);
    $bimages=explode(",", $value['bimages']);
    //$arraymerge=array_merge($images, $bimages);
  ?>

<section class="maSec" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="center-bottom">
  <?php if($value['city_name']==""){ ?>
<h5 class="secHeading"><span><?=$value['country_name'];?></span> <font></font></h5>
<?php } 
else{
?>
<h5 class="secHeading"><span><?=$value['country_name'];?> / <?=$value['city_name'];?></span> <font> </font></h5>
<?php } ?>
<div class="swiper-container">
<div class="progress" role="progressbar"> </div>

<div class="swiper-wrapper swiperProgress">
<?php foreach ($images as $img) { 
 $getbigimg=getbigimg($img);
 ?>
  <a class="proBox swiper-slide" href="<?php echo base_url("uploads/".$img);?>" data-fancybox="<?=$value['city_name'];?>">
 <img src="<?php echo base_url();?>uploads-new/<?=$getbigimg;?>" />
 
<div class="caption">
 <?=$value['description'];?>
</div>
</a>
<?php } ?>



</div>
<!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>
</section>
<?php } ?>


<?php  $this->load->view('includes/footer');?>