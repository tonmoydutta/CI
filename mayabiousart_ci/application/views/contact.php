<?php $this->load->view('includes/header'); ?>


<div  id="locationMap"></div>

<?php foreach($show_contact->result() as $row){ 

echo $row->content;

    ?>


<?php } ?>



<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYfr2_p8wOnBXHmN5qXE8SKUOYKAtTW1s&callback=initMap"></script>
<script src="assets/js/map.js"></script>

<?php $this->load->view('includes/footer'); ?>