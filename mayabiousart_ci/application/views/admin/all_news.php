<?php 
$this->load->view('admin/includes/header');
$this->load->view('admin/includes/sidebar');
?>
<div class="content-wrapper" style="min-height: ">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All News 
        <small></small>
      </h1>
      <div id="success_error_message">

    <?php if(!empty($susscess)){?>
        <?=$susscess;
       }
        ?>


        <?php if(!empty($news_msg)){?>
        <?=$news_msg;
       }
        ?>
     <?php if(!empty($delete_news_msg)){?>
        <?=$delete_news_msg;
       }
        ?>
      </div>
      <ol class="breadcrumb">
        <li><a href="<?=base_url();?>add_news" style="padding:3px 13px 3px; background-color:#00b33c; color: #fff; font-weight: bold;">Add New</a></li>
        
      </ol>
    </section>

    <sction class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!--<h3 class="box-title">Hover Data Table</h3>-->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Slno</th>
                 
                 
                  <th>Image</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>

<?php
$i=1;
foreach($news->result() as $row){
?>

                <tr id="news_tr_<?=$row->slno;?>">
                  <td><?=$i;?></td>
                  
                  
                  
                  <td><img src="uploads/<?=$row->image;?>" height="50px;" width="60px;"></td>
                  <td><a href="<?=base_url();?>edit_news_image/<?=$row->slno;?>">Edit</a> | <a href="#" onclick="delete_news_image(<?=$row->slno;?>);">Delete</a></td>
                  
                </tr>
 <?php 
 $i++;
}
?>               
                
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
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

  });


  function delete_news_image(id){
   var url="<?php echo base_url();?>";
    var slno=id;
    var r=confirm("Do you want to delete this?")
        if (r==true){
          //window.location = url+"delete_news_image/"+slno;
        
        $.ajax({
            type:"POST",
            url:'<?=base_url();?>delete_news_image',
            data:{
              new_del_id:slno
            },
            cache:false,
            success:function(res){

              console.log(res);
            // window.location.reload();
            $("#news_tr_"+slno).hide();
             $("#success_error_message").show().html('<font style="color:red;">News Deleted Successfully.</font>');
            }
                
           
      });
}
        else {
          return false;
        }



  }


</script>
<?php 
$this->load->view('admin/includes/js');
$this->load->view('admin/includes/footer');
 ?>
