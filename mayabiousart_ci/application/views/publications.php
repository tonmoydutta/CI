<?php $this->load->view('includes/header'); ?>

<section class="commonSec">
	<div class="container">
    	<h3></h3>
        <h4 class="maHeading mb-4"><span>PUBLICATION</span> </h4>
        <div id="pub-carouse" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#pub-carouse" data-slide-to="0" class="active"></li>
            <li data-target="#pub-carouse" data-slide-to="1"></li>
            <li data-target="#pub-carouse" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">

            <?php foreach($show_publication->result() as $row){ 

                if($row->slno==1){

                  $class='active';
                }

                else{
 
                  $class='';

                }

              ?>
            <div class="carousel-item <?=$class;?>">
              <img class="d-block w-100" src="uploads/<?=$row->image;?>" alt="First slide">
            </div>
            <?php } ?>
            
          </div>
          <a class="carousel-control-prev" href="#pub-carouse" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#pub-carouse" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
 
    </div>
</section>

<?php $this->load->view('includes/footer'); ?>