<?php

//include('includes/header.php');



?>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Mayabious Art | Login</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.6 -->

  <link rel="stylesheet" href="<?= base_url();?>assets/admin/css/bootstrap.min.css">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Ionicons -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="<?= base_url();?>assets/admin/css/AdminLTE.min.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins

       folder instead of downloading all of them to reduce the load. -->

  <link rel="stylesheet" href="<?= base_url();?>assets/admin/css/_all-skins.min.css">

  <!-- iCheck -->

  <link rel="stylesheet" href="<?= base_url();?>assets/admin/css/blue.css">

  <!-- Morris chart -->

  <link rel="stylesheet" href="<?= base_url();?>assets/admin/css/morris.css">

  <!-- jvectormap -->

  <link rel="stylesheet" href="<?= base_url();?>assets/admin/css/jquery-jvectormap-1.2.2.css">

  <!-- Date Picker -->

  <link rel="stylesheet" href="<?= base_url();?>assets/admin/css/datepicker3.css">

  <!-- Daterange picker -->

  <link rel="stylesheet" href="<?= base_url();?>assets/admin/css/daterangepicker.css">

  <!-- bootstrap wysihtml5 - text editor -->

  <link rel="stylesheet" href="<?= base_url();?>assets/admin/css/bootstrap3-wysihtml5.min.css">

  

  <link rel="stylesheet" href="<?= base_url();?>assets/admin/css/custom.css">



 

</head>



<body class="hold-transition login-page">

<div class="login-box">

  <div class="login-logo">

  	<img src="<?= base_url();?>assets/admin/img/mayabiousLogo.png">

    <p> Admin Panel</p>

  </div>

  <!-- /.login-logo -->

  <div class="login-box-body">

    <p class="login-box-msg">Sign in to start your session</p>



    <form method="post" id="form_submit" action="<?=base_url();?>check_user">

      <div class="form-group has-feedback">

        <input type="text" id="user_name" name="uname" class="form-control" placeholder="Username">

        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" id="user_pass" name="upass" class="form-control" placeholder="Password">

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div id="error_message" style="color:red;">

        <?php if(!empty($errormsg)){?>

          <?php echo $errormsg;?>

        <?php } ?>

        <?php echo validation_errors(); ?>

      </div>

      <div class="text-center">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>

      </div>

    </form>





  </div>

  

</div>



<?php

//include('includes/footer.php');



?>





<!-- jQuery UI 1.11.4 -->

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>

  $.widget.bridge('uibutton', $.ui.button);

</script>

<!-- Bootstrap 3.3.6 -->

<script src="<?= base_url();?>assets/admin/js/bootstrap.min.js"></script>

<!-- Morris.js charts -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

<script src="<?= base_url();?>assets/admin/js/morris.min.js"></script>

<!-- Sparkline -->

<script src="<?= base_url();?>assets/admin/js/jquery.sparkline.min.js"></script>

<!-- jvectormap -->

<script src="<?= base_url();?>assets/admin/js/jquery-jvectormap-1.2.2.min.js"></script>

<script src="<?= base_url();?>assets/admin/js/jquery-jvectormap-world-mill-en.js"></script>

<!-- jQuery Knob Chart -->

<script src="<?= base_url();?>assets/admin/js/jquery.knob.js"></script>

<!-- daterangepicker -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

<script src="<?= base_url();?>assets/admin/js/daterangepicker.js"></script>

<!-- datepicker -->

<script src="<?= base_url();?>assets/admin/js/bootstrap-datepicker.js"></script>

<!-- Bootstrap WYSIHTML5 -->

<script src="<?= base_url();?>assets/admin/js/bootstrap3-wysihtml5.all.min.js"></script>

<!-- Slimscroll -->

<script src="<?= base_url();?>assets/admin/js/jquery.slimscroll.min.js"></script>

<!-- FastClick -->

<script src="<?= base_url();?>assets/admin/js/fastclick.js"></script>

<!-- AdminLTE App -->

<script src="<?= base_url();?>assets/admin/js/app.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script src="<?= base_url();?>assets/admin/js/dashboard.js"></script>

<!-- AdminLTE for demo purposes -->

<script src="<?= base_url();?>assets/admin/js/demo.js"></script>

<script src="<?= base_url();?>assets/admin/js/jquery-2.2.3.min.js"></script>

<!-- <script>

$(document).ready(function(){

$("#form_submit").on('submit',function(e){



e.preventDefault();



var name=$("#user_name").val();

var pass=$("#user_pass").val();



if(name==""){



  $("#error_message").show().html('<span style="color:red;">Please enter your username.');

  return false;

}



if(pass==""){



  $("#error_message").show().html('<span style="color:red;">Please enter your password.');

  return false;

}

else{



  $.ajax({

      type: 'POST',

      url:  '<?php echo base_url();?>check_user',

      data:  new FormData(this),

          contentType: false,

          cache: false,

          processData:false,

      success: function(response)

      {

        console.log(response);



        if(response==1){



          window.location.href='<?php echo base_url();?>dashboard';

        }



        else{



         $("#error_message").show().html(response);

         return false; 

        }

        

      }

         

      });

}



  });



});

</script> -->

</body>

</html>