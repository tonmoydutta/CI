<?php $this->load->view('includes/header'); ?>

<section class="commonSec">
    <div class="container">
    	<h4 class="maHeading text-center mb-3"><span>Our Team</span> </h4>
        <div class="row m-4">
        	<div class="col-md-8 offset-md-2 text-center">
            	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>
        <div class="row">

      <?php foreach($show_team->result() as $row){?>

            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                    	<img src="uploads/<?=$row->image;?>" alt="">
                        <ul class="icon">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-skype"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                        </ul>
                    </div>
                    <h3 class="title"><?=$row->name;?></h3>
                    <span class="post"><?=$row->designation;?></span>
                    <div class="message">
                    	<p><?=$row->description;?></p>
                    </div> 
                </div>
            </div>
<?php } ?>

            
        </div>
    </div>
    
</section>

<?php $this->load->view('includes/footer'); ?>