<?php

?>
<script>



  
 $(document).ready(function(){



$("#features_form").on('submit',function(e){

e.preventDefault();
for (instance in CKEDITOR.instances) {
    CKEDITOR.instances[instance].updateElement();
}


var title=$("#features_title").val();
var description=$("#editor2").val();

if(title==""){
    
    swal ( "Oops" ,  "Please enter title!" , "error" );
    return false;

    //alert(1);
  }


if(description==""){
    
    swal ( "Oops" ,  "Please enter description!" , "error" );
    return false;

    //alert(1);
  }

  else{

      $('#loading_image_club').show();
        $.ajax({
      type: 'POST',
      url:  'features_code.php',
      data:  new FormData(this),
          contentType: false,
          cache: false,
          processData:false,
      success: function(response)
      {
        console.log(response);
      },
          complete: function(){
          $('#loading_image_club').hide();
            swal({title: "Thank You!", text: "Your data has been saved.!", type: "success"},
         function(){ 
             //window.location.reload();
             window.location.href = 'all_features.php';
         }
      );
          }
      });


  }

});



$("#edit_features_form").on('submit',function(e){

e.preventDefault();
for (instance in CKEDITOR.instances) {
    CKEDITOR.instances[instance].updateElement();
}

var title=$("#features_edit_title").val();

var description=$("#editor3").val();

//alert(description);
if(title==""){
    
    swal ( "Oops" ,  "Please enter title!" , "error" );
    return false;

    //alert(1);
  }


if(description==""){
    
    swal ( "Oops" ,  "Please enter description!" , "error" );
    return false;

    //alert(1);
  }

  else{

$('#loading_image_club').show();
        $.ajax({
      type: 'POST',
      url:  'edit_features_code.php',
      data:  new FormData(this),
          contentType: false,
          cache: false,
          processData:false,
      success: function(response)
      {
        console.log(response);
      },
          complete: function(){
          $('#loading_image_club').hide();
            swal({title: "Thank You!", text: "Your data has been saved.!", type: "success"},
         function(){ 
             //window.location.reload();
             window.location.href = 'all_features.php';
         }
      );
          }
      });
    
  }

});




$("#portfolio_form").on('submit',function(e){

e.preventDefault();
for (instance in CKEDITOR.instances) {
    CKEDITOR.instances[instance].updateElement();
}

var title=$("#portfolio_title").val();

var description=$("#editor4").val();

var image=$("#portfolio_image").val();


if(title==""){

  swal ( "Oops" ,  "Please enter title!" , "error" );
    return false;

}

if(description==""){

  swal ( "Oops" ,  "Please enter description!" , "error" );
    return false;

}

if(image==""){

  swal ( "Oops" ,  "Please enter image!" , "error" );
    return false;

}

else{


$('#loading_image_club').show();
        $.ajax({
      type: 'POST',
      url:  'portfolio_code.php',
      data:  new FormData(this),
          contentType: false,
          cache: false,
          processData:false,
      success: function(response)
      {
        console.log(response);
      },
          complete: function(){
          $('#loading_image_club').hide();
            swal({title: "Thank You!", text: "Your data has been saved.!", type: "success"},
         function(){ 
             //window.location.reload();
             window.location.href = 'all_portfolio.php';
         }
      );
          }
      });

}



});




$("#edit_portfolio_form").on('submit',function(e){

e.preventDefault();
for (instance in CKEDITOR.instances) {
    CKEDITOR.instances[instance].updateElement();
}

var title=$("#edit_portfolio_title").val();

var description=$("#editor6").val();

//var image=$("#portfolio_image").val();


if(title==""){

  swal ( "Oops" ,  "Please enter title!" , "error" );
    return false;

}

if(description==""){

  swal ( "Oops" ,  "Please enter description!" , "error" );
    return false;

}

/*if(image==""){

  swal ( "Oops" ,  "Please enter image!" , "error" );
    return false;

}*/

else{


$('#loading_image_club').show();
        $.ajax({
      type: 'POST',
      url:  'edit_portfolio_code.php',
      data:  new FormData(this),
          contentType: false,
          cache: false,
          processData:false,
      success: function(response)
      {
        console.log(response);
      },
          complete: function(){
          $('#loading_image_club').hide();
            swal({title: "Thank You!", text: "Your data has been saved.!", type: "success"},
         function(){ 
             //window.location.reload();
             window.location.href = 'all_portfolio.php';
         }
      );
          }
      });

}



});



$("#team_form").on('submit',function(e){

e.preventDefault();
for (instance in CKEDITOR.instances) {
    CKEDITOR.instances[instance].updateElement();
}

var title=$("#team_title").val();

var designation=$("#team_designation").val();

var image=$("#team_image").val();

var description=$("#team_description").val();


if(title==""){

  swal ( "Oops" ,  "Please enter title!" , "error" );
    return false;

}

if(designation==""){

  swal ( "Oops" ,  "Please enter Designation!" , "error" );
    return false;

}

if(image==""){

  swal ( "Oops" ,  "Please enter team image!" , "error" );
    return false;

}

if(description==""){

  swal ( "Oops" ,  "Please enter description!" , "error" );
    return false;

}

else{


$('#loading_image_club').show();
        $.ajax({
      type: 'POST',
      url:  'team_code.php',
      data:  new FormData(this),
          contentType: false,
          cache: false,
          processData:false,
      success: function(response)
      {
        console.log(response);
      },
          complete: function(){
          $('#loading_image_club').hide();
            swal({title: "Thank You!", text: "Your data has been saved.!", type: "success"},
         function(){ 
             //window.location.reload();
             window.location.href = 'all_team.php';
         }
      );
          }
      });

}



});



$("#edit_team_form").on('submit',function(e){

e.preventDefault();
for (instance in CKEDITOR.instances) {
    CKEDITOR.instances[instance].updateElement();
}

var title=$("#edit_team_title").val();

var designation=$("#edit_team_designation").val();

var description=$("#edit_team_description").val();


if(title==""){

  swal ( "Oops" ,  "Please enter title!" , "error" );
    return false;

}

if(designation==""){

  swal ( "Oops" ,  "Please enter Designation!" , "error" );
    return false;

}

if(description==""){

  swal ( "Oops" ,  "Please enter Description!" , "error" );
    return false;

}

/*if(image==""){

  swal ( "Oops" ,  "Please enter team image!" , "error" );
    return false;

}*/

else{


$('#loading_image_club').show();
        $.ajax({
      type: 'POST',
      url:  'edit_team_code.php',
      data:  new FormData(this),
          contentType: false,
          cache: false,
          processData:false,
      success: function(response)
      {
        console.log(response);
      },
          complete: function(){
          $('#loading_image_club').hide();
            swal({title: "Thank You!", text: "Your data has been saved.!", type: "success"},
         function(){ 
             //window.location.reload();
             window.location.href = 'all_team.php';
         }
      );
          }
      });

}



});


$("#edit_theme_form").on('submit',function(e){

e.preventDefault();
for (instance in CKEDITOR.instances) {
    CKEDITOR.instances[instance].updateElement();
}

var title=$("#edit_theme_title").val();

var designation=$("#editor8").val();

var image=$("#edit_theme_image").val();

//var image=$("#edit_team_image").val();


if(title==""){

  swal ( "Oops" ,  "Please enter title!" , "error" );
    return false;

}

if(designation==""){

  swal ( "Oops" ,  "Please enter Designation!" , "error" );
    return false;

}

if(image==""){

  swal ( "Oops" ,  "Please enter team image!" , "error" );
    return false;

}

else{


$('#loading_image_club').show();
        $.ajax({
      type: 'POST',
      url:  'edit_perfect_theme_code.php',
      data:  new FormData(this),
          contentType: false,
          cache: false,
          processData:false,
      success: function(response)
      {
        console.log(response);
      },
          complete: function(){
          $('#loading_image_club').hide();
            swal({title: "Thank You!", text: "Your data has been saved.!", type: "success"},
         function(){ 
             //window.location.reload();
             window.location.href = 'perfect_theme.php';
         }
      );
          }
      });

}



});


});




function delete_features(id){

  //alert(id);
  var slno=id;

  swal({
  title: "Are you sure?",
  text: "You will not be able to recover this data!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plx!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    delete_conform(slno);          // submitting the form when user press yes
  } else {
    swal("Cancelled", "Your data is safe :)", "error");
  }

});

function delete_conform(id) {

var del_id=id;

$.ajax({
            type:"POST",
            url:'delete_features.php',
            data:{
              new_id:del_id
            },
            cache:false,
            success:function(res){

              console.log(res);
            },
                complete: function(){
                swal({title: "Deleted!", text: "Data deleted successfully", type: "success"},
                   function(){ 
                       window.location.reload();
                   }
                );
            }
      });


} 


}

function delete_portfolio(slno)  {
var id=slno;
//alert(id);

swal({
  title: "Are you sure?",
  text: "You will not be able to recover this data!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plx!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    delete_conform(id);          // submitting the form when user press yes
  } else {
    swal("Cancelled", "Your data is safe :)", "error");
  }

});

function delete_conform(slno) {

var del_id=slno;

$.ajax({
            type:"POST",
            url:'delete_portfolio.php',
            data:{
              new_id:del_id
            },
            cache:false,
            success:function(res){

              console.log(res);
            },
                complete: function(){
                swal({title: "Deleted!", text: "Data deleted successfully", type: "success"},
                   function(){ 
                       window.location.reload();
                   }
                );
            }
      });


}
}

function delete_team(id){

var slno=id;
//alert(slno);
swal({
  title: "Are you sure?",
  text: "You will not be able to recover this data!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel pls!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    delete_conform(slno);          // submitting the form when user press yes
  } else {
    swal("Cancelled", "Your data is safe :)", "error");
  }

});

function delete_conform(slno) {

var del_id=slno;

$.ajax({
            type:"POST",
            url:'delete_team.php',
            data:{
              new_id:del_id
            },
            cache:false,
            success:function(res){

              console.log(res);
            },
                complete: function(){
                swal({title: "Deleted!", text: "Data deleted successfully", type: "success"},
                   function(){ 
                       window.location.reload();
                   }
                );
            }
      });


}

}
</script>