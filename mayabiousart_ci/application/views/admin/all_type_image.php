<?php 
$this->load->view('admin/includes/header');
$this->load->view('admin/includes/sidebar');
?>
<div class="content-wrapper" style="min-height: ">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Type Image 
        
        
        <small></small>
      </h1>
      <div id="success_error_message">

    <?php if(!empty($type_susscess)){?>
        <?=$type_susscess;
       }
        ?>


        <?php if(!empty($type_msg)){?>
        <?=$type_msg;
       }
        ?>
     <?php if(!empty($delete_news_msg)){?>
        <?=$delete_news_msg;
       }
        ?>
      </div>


      <div class="box-header">

              <label for="project_type">Select Image Category:</label>

              <select class="form-control" id="get_cat_wise" name="display_cat">
              <option value="">Select Category</option>

         <?php  $all_cat=get_all_icategory() ?>

              <!-- <option <?php //if ($row->type == "$cat->category_name" ) echo 'selected' ; ?> value="<?=$cat->category_name;?>"><?=$cat->category_name;?></option> -->
          <?php foreach($all_cat->result() as $cat){?>
              <!-- <option value="<?=$cat->category_name;?>"><?=$cat->category_name;?></option> -->
    <?php //if(!empty($selected_cat)){?>
              <!-- <option <?php //if ($selected_cat == "$cat->category_name" ) echo 'selected' ; ?> value="<?=$cat->category_name;?>"><?=$cat->category_name;?></option> -->
              
        <?php// } else{  ?>

          <option value="<?=$cat->category_name;?>"><?=$cat->category_name;?></option>
       <?php }


     ?>      
 
              </select>
        </div>
<?php if(!empty($selected_cat)){

$cat_value=$selected_cat; 

}else{

  $cat_value='';
} 
  ?>
   <input type="hidden" id="selected_category" value="<?=$cat_value;?>">
 
      <ol class="breadcrumb">
        <li><a href="<?=base_url();?>add_type_image" style="padding:3px 13px 3px; background-color:#00b33c; color: #fff; font-weight: bold;">Add New</a></li>
        
      </ol>
    </section>

    <sction class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="display: none;">
            <div class="box-header">
              <!--<h3 class="box-title">Hover Data Table</h3>-->
              <button style="margin-bottom: 10px" class="btn btn-primary delete_all">Delete All Selected</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover" style="display: none;">
                <thead>
                <tr>
                  <th width="50px"><input type="checkbox" id="master"></th>
                  <th>Slno</th>
                  <th>Image Title</th>
                  <th>Description</th>
                  <th>Image Category</th>
                  <th>Image</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
               
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    <!-- Main content -->
    
    <!-- /.content -->
  </div>


 <script src="<?=base_url();?>assets/admin/js/jquery-2.2.3.min.js"></script> 
 <script src="<?=base_url();?>assets/admin/js/jquery.dataTables.min.js"></script>
 <script src="<?=base_url();?>assets/admin/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {

    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });

  });




  function delete_type_image(id){
   
    var slno=id;
    var r=confirm("Do you want to delete this?")
        if (r==true){
          //window.location = url+"delete_news_image/"+slno;
        
        $.ajax({
            type:"POST",
            url:'<?=base_url();?>delete_type_image',
            data:{
              new_del_id:slno
            },
            cache:false,
            success:function(res){

              console.log(res);
            // window.location.reload();
            $("#tpe_tr_"+slno).hide();
             $("#success_error_message").show().html('<font style="color:red;">Type Image  Deleted Successfully.</font>');
            }
                
           
      });
}
        else {
          return false;
        }



  }

$(document).ready(function(){


//$("#aaaaaa").click(function(){
  $("#get_cat_wise").on('change', function(e){
  
    //var hidden_val1=$("#selected_category").val();
   var typeval=$("#get_cat_wise").val();

   if(typeval!=''){

    $(".box").css("display", "block");
   }
   //$('#example2').DataTable().destroy();
   // if(hidden_val1!='' && typeval=='')
   // {
   //  alert('Please select any type');
   // }
   // else
   // {
    //$('#example2').DataTable().destroy();
    $('#example2').DataTable().clear();
      $.ajax({
            type:"POST",
            url:'<?php echo site_url('all_type_image');?>',
            data:  "typeval="+typeval,
            success:function(res){

              var m=1;

              //console.log(res);
              var response=JSON.parse(res);
              for(var i=0; i<response.length;i++)
              {
                console.log(response[i].slno);
                var ref="<?php echo base_url('edit_type_image');?>";
                var id=response[i].slno;
                var href=ref+'/'+id;
                var img='<img src="uploads/'+response[i].image+'" height="50px;" width="60px;">';
                var del='onclick="delete_type_image('+response[i].slno+')"';
                $('#example2').show();
                var total=i+m;
                var table = $('#example2').DataTable();
                var check='<input type="checkbox" class="sub_chk" data-id="'+id+'">';
                table.rows.add( $(
                        '<tr id="tpe_tr_'+response[i].slno+'">'+
                       '  <td>'+check+'</td>'+
                        '  <td>'+total+'</td>'+
                        '  <td>'+response[i].title+'</td>'+
                        '  <td>'+response[i].description+'</td>'+
                        '  <td>'+response[i].type+'</td>'+
                        '  <td>'+img+'</td>'+
                        '  <td><a href="'+href+'">Edit</a> | <a href="#" '+del+'>Delete</a></td>'+
                        '</tr>'
                )).draw();
                //$('#example2').DataTable().reload();
                //$('#example2').DataTable().redraw();

              }
/*              var table = $('#example2').DataTable(); 
              table.ajax.reload( null, false );*/
              //$('#example2').DataTable().ajax.reload();
            
            
            }
                
           
      });
  // }

});
  //});

var hidden_val=$("#selected_category").val();

$("#get_cat_wise").val(hidden_val).change();

});

</script>

<script type="text/javascript">
    $(document).ready(function () {
 
        $('#master').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".sub_chk").prop('checked', true);  
         } else {  
            $(".sub_chk").prop('checked',false);  
         }  
        });
 
        $('.delete_all').on('click', function(e) {
 
            var allVals = [];  
            $(".sub_chk:checked").each(function() {  
                allVals.push($(this).attr('data-id'));
            });  
 
            if(allVals.length <=0)  
            {  
                alert("Please select row.");  
            }  else {  
 
                var check = confirm(" Want to delete this row?");  
                if(check == true){  
 
                    var join_selected_values = allVals.join(","); 
 
                    $.ajax({
                        type: 'POST',
                        url:'<?php echo site_url('delete_selected_type_image');?>' ,
                        
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                          console.log(data);
                          $(".sub_chk:checked").each(function() {  
                              $(this).parents("tr").remove();
                          });
                          alert("Item Deleted successfully.");
                        },
                        error: function (data) {
                            alert(data.responseText);
                            console.log(data);
                        }
                    });
 
                  $.each(allVals, function( index, value ) {
                      $('table tr').filter("[data-row-id='" + value + "']").remove();
                  });
                }  
            }  
        });
    });
</script>

<?php 
$this->load->view('admin/includes/js');
$this->load->view('admin/includes/footer');
 ?>
