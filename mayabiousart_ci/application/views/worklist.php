<?php $this->load->view('includes/header'); ?>

<section class="commonSec">
<?php foreach ($show_worklist->result() as $row) { ?>
	<div class="container">
    	<h3><?=$row->title;?></h3>
        <p><?=$row->content;?></p>
 
    </div>

    <?php } ?>
</section>

<?php $this->load->view('includes/footer'); ?>