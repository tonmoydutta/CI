 <script src="<?= base_url();?>assets/admin/js/jquery-2.2.3.min.js"></script>
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!--<div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>-->
      <!-- search form -->
      <!--<form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>-->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <!--<li class="header">MAIN NAVIGATION</li>-->
        
  







        


        
        <!--<li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Contact</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!--<li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>-->
            <li><a href="<?=base_url();?>contact_content"><i class="fa fa-circle-o"></i>Contact Content</a></li>
            <!--<li><a href="#"><i class="fa fa-circle-o"></i>Entertainment Gallery
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i></span></a>

                    <ul class="treeview-menu">
                    <li><a href="<?=base_url();?>add_entertainment_gallery"><i class="fa fa-circle-o"></i>Add New Gallery Image</a></li>
                    <li><a href="<?=base_url();?>all_entertainment_gallery"><i class="fa fa-circle-o"></i>All Gallery Image</a></li>
                    </ul>

                </li>-->
                  

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Creative Approach</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!--<li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>-->
            <li><a href="<?=base_url();?>creative_approach_content"><i class="fa fa-circle-o"></i>Creative Approach Content</a></li>
            <!--<li><a href="#"><i class="fa fa-circle-o"></i>Recreation Gallery
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i></span></a>

                    <ul class="treeview-menu">
                    <li><a href="<?=base_url();?>add_recreation_gallery"><i class="fa fa-circle-o"></i>Add New Gallery Image</a></li>
                    <li><a href="<?=base_url();?>all_recreation_gallery_image"><i class="fa fa-circle-o"></i>All Gallery Image</a></li>
                    </ul>

                </li>-->
                  

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Work List</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!--<li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>-->
            <li><a href="<?=base_url();?>work_list_content"><i class="fa fa-circle-o"></i>Work List Content</a></li>
            <!--<li><a href="#"><i class="fa fa-circle-o"></i>Tranquility Gallery
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i></span></a>

                    <ul class="treeview-menu">
                    <li><a href="<?=base_url();?>add_tranquility_gallery"><i class="fa fa-circle-o"></i>Add New Gallery Image</a></li>
                    <li><a href="<?=base_url();?>all_tranquility_gallery_image"><i class="fa fa-circle-o"></i>All Gallery Image</a></li>
                    </ul>

                </li>-->
                  

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>News</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url();?>all_news"><i class="fa fa-circle-o"></i> All News</a></li>
            <li><a href="<?=base_url();?>add_news"><i class="fa fa-circle-o"></i> Add New News</a></li>
            
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-check-square-o"></i> <span>Publication</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url();?>all_publication"><i class="fa fa-circle-o"></i> All Publication</a></li>
            <li><a href="<?=base_url();?>add_new_publication"><i class="fa fa-circle-o"></i> Add New Publication</a></li>
            
          </ul>
        </li>


         <li class="treeview">
          <a href="#">
            <i class="fa fa-commenting-o"></i> <span>Team</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url();?>all_team"><i class="fa fa-circle-o"></i> All Team</a></li>
            <li><a href="<?=base_url();?>add_new_team"><i class="fa fa-circle-o"></i> Add New Team</a></li>

             <!--<li><a href="#"><i class="fa fa-circle-o"></i>All Team Member
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i></span></a>

                    <ul class="treeview-menu">
                    <li><a href="<?=base_url();?>add_appartment_gallery"><i class="fa fa-circle-o"></i>Add New Team</a></li>
                    <li><a href="<?=base_url();?>all_appartment_gallery"><i class="fa fa-circle-o"></i>All Team</a></li>
                    </ul>

                </li>-->
            
          </ul>
        </li>

        

        <li class="">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Awards</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!--<li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Add New</a></li>-->
            <li><a href="<?php echo base_url();?>add_new_awards"><i class="fa fa-circle-o"></i> Add New Awards</a></li>
            <li><a href="<?php echo base_url();?>all_awards"><i class="fa fa-circle-o"></i> All Awards</a></li>
            
          </ul>
        </li>


       

        <li class="">
          <a href="#">
            <i class="fa fa-binoculars"></i> <span>Media</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!--<li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Add New</a></li>-->
            <li><a href="<?php echo base_url();?>add_media"><i class="fa fa-circle-o"></i> Add New Media</a></li>
            <li><a href="<?php echo base_url();?>all_media"><i class="fa fa-circle-o"></i> All Media</a></li>
            
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Clients</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url();?>all_clients"><i class="fa fa-circle-o"></i> All Clients</a></li>
            <li><a href="<?=base_url();?>add_new_clients"><i class="fa fa-circle-o"></i> Add New Clients</a></li>
            
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-bank"></i>
            <span>Type Image</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?=base_url();?>add_type_image"><i class="fa fa-circle-o"></i>Add Type Image</a></li>
            <li><a href="<?=base_url();?>all_type_image"><i class="fa fa-circle-o"></i>All Type Image</a></li>
            
                  

          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-anchor"></i>
            <span>Type Video</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?=base_url();?>add_video"><i class="fa fa-circle-o"></i>Add Video</a></li>
            <li><a href="<?=base_url();?>all_video"><i class="fa fa-circle-o"></i>All Video</a></li>
            
                  

          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-certificate"></i>
            <span>Location Image</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?=base_url();?>add_location_image"><i class="fa fa-circle-o"></i>Add Location Image</a></li>
            <li><a href="<?=base_url();?>all_location_image"><i class="fa fa-circle-o"></i>All Location Image</a></li>
            
                  

          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-anchor"></i>
            <span>Image Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?=base_url();?>add_image_type_category"><i class="fa fa-circle-o"></i>Add Image Category</a></li>
            <li><a href="<?=base_url();?>all_image_category"><i class="fa fa-circle-o"></i>All Category</a></li>
            
                  

          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-anchor"></i>
            <span>Video Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?=base_url();?>add_video_category"><i class="fa fa-circle-o"></i>Add Video Category</a></li>
            <li><a href="<?=base_url();?>all_category"><i class="fa fa-circle-o"></i>All Category</a></li>
            
                  

          </ul>
        </li>

      
        <!--<li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>