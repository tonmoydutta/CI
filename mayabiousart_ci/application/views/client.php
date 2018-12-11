<?php  

$this->load->view('includes/header');
?>

<section class="commonSec">
	<div class="container">
    	<h4 class="maHeading  mb-4"><span>Clients</span> </h4>
        <div class="client-row clearfix">
            
       <?php foreach($show_client->result() as $row){ ?>
            <div class="clientBox ">
                <div class="pic"><img src="uploads/<?=$row->image;?>"> <!--<span class="title"><?=$row->title;?></span>--></div>
                <div class="clientName"><?=$row->title;?></div>
                <div class="cityCountry"><?=$row->address;?></span></div>
            </div>
         <?php } ?>   
            
        </div>
        
 
    </div>
</section>

<?php //include("includes/footer.php"); 

$this->load->view('includes/footer');

?>