<?php $this->load->view('includes/header'); ?>

<section class="commonSec">
	<div class="container">
    	<h4 class="maHeading  mb-4"><span>Awards</span> </h4>
        <div class="row">
        	
<?php foreach($show_awards->result() as $row){ 

  $new_datetime = DateTime::createFromFormat ( "Y-m-d H:i:s", $row->datetime );

  $date=$new_datetime->format('d');
  $month=$new_datetime->format('M');
  $year=$new_datetime->format('Y');

    ?>
            <div class="col-sm-6 col-md-6 col-lg-4">
            	<div class="post-box">
                    <div class="post-img">
                        <img src="uploads/<?=$row->image;?>" alt="">
                    </div>
                    <p class="date"><?=$date;?><sup>th</sup> <?=$month;?>, <?=$year;?></p>
                    <h3 class="post-title"><?=$row->title;?></h3>
                    <p class="post-description">
                        <?=$row->description;?>
                    </p>
                    <a href="#" class="read-more" data-toggle="modal" data-target="#largeModal<?=$row->slno;?>">
                        <i class="fa fa-long-arrow-right"></i>
                        <span>read more</span>
                    </a>
                </div>	
            </div>

            <!--Modal-->

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
       <p class="date"><?=$date;?><sup>th</sup> <?=$month;?>, <?=$year;?></p>
        <img class="img-fluid" src="uploads/<?=$row->image;?>" alt="award01">
                    
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

            <!--End Modal-->
          <?php } ?>  



        </div>
    </div>
</section>




<?php $this->load->view('includes/footer'); ?>