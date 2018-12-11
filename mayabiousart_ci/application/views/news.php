<?php $this->load->view('includes/header'); ?>

<section class="commonSec">
	<div class="container">
    	<h4 class="maHeading  mb-4"><span>NEWS</span> </h4>
        <div class="row">

<?php foreach($show_news->result() as $row) { ?>
        	<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
            	<div class="myBox mb-4">
                    <img src="uploads/<?=$row->image;?>" class="img-fluid">
                </div>
            </div>
            
<?php } ?>

           
        </div>
        
 
    </div>
</section>

<?php $this->load->view('includes/footer'); ?>