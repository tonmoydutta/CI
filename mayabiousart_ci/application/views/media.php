<?php  

      $this->load->view('includes/header');

?>

<section class="commonSec">
	<div class="container">

        <h4 class="maHeading  mb-4"><span>MEDIA</span> </h4>
        
        <div class="row">

<?php foreach($show_media->result() as $row){

 $new_datetime = DateTime::createFromFormat ( "Y-m-d H:i:s", $row->datetime );

  $date=$new_datetime->format('d');
  $month=$new_datetime->format('M');
  $year=$new_datetime->format('Y');



    ?>
        	<div class="col-sm-6">
            	<div class="mediaBox">
                    <a href="#" class="media-img">
                        <img src="uploads/<?=$row->image;?>" alt="">
                        <div class="media-date"> <span class="date"><?=$date;?></span> <span class="month"><?=$month?></span></div>
                    </a>
                    <div class="media-review">
                        <h3 class="media-title"><a href="#" data-toggle="modal" data-target="#largeModal<?=$row->slno;?>"><?=$row->title;?></a></h3>
                        
                        <p class="media-description"><?=$row->description;?></p>
                    </div>
                </div>
            </div>


            <!---Modal Start-->

 <div class="modal fade" id="largeModal<?=$row->slno;?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-xs">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body text-center">
       <h3 class="post-title"><b><?=$row->title;?></b></h3>
       <p class="date"><?=$date;?><sup>th</sup> <?=$month?>, <?=$year;?></p>
        <img class="img-fluid" src="uploads/<?=$row->image;?>" alt="media01">
                    
                    <p class="post-description">
                        <?=$row->description;?>
                    </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

            <!--Modal End-->


         <?php } ?> 
        </div>
       
 
    </div>
</section>

<?php  
   $this->load->view('includes/footer');

?>