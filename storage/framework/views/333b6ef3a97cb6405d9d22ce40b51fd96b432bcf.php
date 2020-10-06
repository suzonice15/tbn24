<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(url('public/uploads/users')); ?>/<?php echo e(Session::get('picture')); ?>" class="img-circle"
                     alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo e(Session::get('name')); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?php
        $status= Session::get('status');

        ?>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

            <li>
                <a href="<?php echo e(url('/dashboard')); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">

            </span>
                </a>

            </li>





            <?php


            if($status=='super-admin') {
            ?>
             <li>
                <a href="<?php echo e(URL::to('admin/programs')); ?>">
                    <i class="fa fa fa-tv"></i> <span>Program</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa fa-clock-o"></i> <span>Schedule</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/schedules')); ?>"><i class="fa fa fa-list"></i></i>Schedule Daily</a></li>
                    <li><a href=" <?php echo e(url('admin/schedule-weekly')); ?>"><i class="fa fa fa-list"></i></i>Schedule Weekly</a></li>
                    <li style="display:none"><a href=" <?php echo e(url('/schedules/schedule-weekly-day-view')); ?>"><i class="fa fa fa-list"></i></i> Schedule Weekly View</a></li>


                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa fa-clock-o"></i> <span>Polls</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/pulls')); ?>"><i class="fa fa fa-list"></i></i>Pulls</a></li>
                    <li><a href=" <?php echo e(url('admin/pull/result')); ?>"><i class="fa fa fa-list"></i></i>Results</a></li>


                </ul>
            </li>



            <li>
                <a href="<?php echo e(URL::to('admin/contact-us')); ?>">
                    <i class="fa fa fa-tv"></i> <span> Contact Us</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(URL::to('admin/faq')); ?>">
                    <i class="fa fa fa-tv"></i> <span> Faq  </span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(URL::to('admin/news')); ?>">
                    <i class="fa fa fa-tv"></i> <span> News  </span>
                </a>
            </li>

            <li>
                <a href="<?php echo e(URL::to('admin/popular/video')); ?>">
                    <i class="fa fa fa-tv"></i> <span> Popular Video  </span>
                </a>
            </li>

            <li   class="treeview">
                <a href="#">
                    <i class="fa fa fa-clock-o"></i> <span>Post</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/posts')); ?>"><i class="fa fa fa-list"></i></i>All Posts</a></li>
                    <li><a href=" <?php echo e(url('admin/categories')); ?>"><i class="fa fa fa-list"></i></i>Category</a></li>


                </ul>
            </li>





            <li style="display:none" class="treeview">
                <a href="#">
                    <i class="fa fa fa-clock-o"></i> <span>Youtube</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/playlist')); ?>"><i class="fa fa fa-list"></i></i>Playlist</a></li>
                    <li><a href=" <?php echo e(url('admin/categories')); ?>"><i class="fa fa fa-list"></i></i>Category</a></li>


                </ul>
            </li>






            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Users</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/user/create')); ?>"><i class="fa fa-circle-o"></i>Create User</a></li>
                    <li><a href=" <?php echo e(url('admin/users')); ?>"><i class="fa fa-circle-o"></i>All Users</a></li>
                    <li><a href=" <?php echo e(url('admin/website/user')); ?>"><i class="fa fa-circle-o"></i>Website User</a></li>


                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Pages</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/page/create')); ?>"><i class="fa fa-circle-o"></i>Add New Page </a>
                    </li>
                    <li><a href=" <?php echo e(url('admin/pages')); ?>"><i class="fa fa-circle-o"></i>All Pages </a></li>


                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Setting</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>


            <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/app-setting')); ?>"><i class="fa fa-circle-o"></i>Default Setting</a>
                    </li>
                    <li><a href=" <?php echo e(url('admin/homepage/setting')); ?>"><i class="fa fa-circle-o"></i>Home Page Setting</a></li>
                    <li hidden ><a  href=" <?php echo e(url('admin/social/setting')); ?>"><i class="fa fa-circle-o"></i>Social Media Setting</a></li>
                    <li><a href=" <?php echo e(url('/clear-cache')); ?>"><i class="fa fa-circle-o"></i>clear-cache</a></li>
                </ul>
            </li>


        <?php } ?>


    </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/layouts/includes/sidebar.blade.php ENDPATH**/ ?>