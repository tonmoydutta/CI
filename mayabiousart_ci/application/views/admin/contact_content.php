<?php 
$this->load->view('admin/includes/header');

$this->load->view('admin/includes/sidebar'); ?>

 
<div class="content-wrapper" style="min-height: 900px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contact Content
        <small></small>
      </h1>
      <div><?php if(!empty($contact_msg)){?>
        <?=$contact_msg;
       }
        ?>

      </div>
      <!--<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>-->
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
                  <!-- <th>Title</th> -->
                  <th>Content</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>

<?php
$i=1;
foreach($contact_content->result() as $row){
?>

                <tr>
                  <td><?php echo $i;?></td>
                  <!-- <td><?php echo $row->title;?></td> -->
                  <td><?php echo substr($row->content,0,400);?></td>
                  <td><a href="<?php echo base_url();?>edit_contact_content/<?=$row->slno;?>">Edit</a></td>
                  
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


<?php 
$this->load->view('admin/includes/js');

$this->load->view('admin/includes/footer');
?>
