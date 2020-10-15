<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('public/uploads/users')}}/{{ Session::get('picture') }}" class="img-circle"
                     alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Session::get('name')}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?php
        $status= Session::get('status');

        ?>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

            <li>
                <a href="{{ url('/dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">

            </span>
                </a>

            </li>





            <?php


            if($status=='super-admin') {
            ?>
             <li>
                <a href="{{URL::to('admin/programs')}}">
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
                    <li><a href=" {{ url('admin/schedules') }}"><i class="fa fa fa-list"></i></i>Schedule Daily</a></li>
                    <li><a href=" {{ url('admin/schedule-weekly') }}"><i class="fa fa fa-list"></i></i>Schedule Weekly</a></li>
                    <li ><a href=" {{ url('/schedules/schedule-weekly-day-view') }}"><i class="fa fa fa-list"></i></i> Schedule Weekly View</a></li>


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
                    <li><a href=" {{ url('admin/pulls') }}"><i class="fa fa fa-list"></i></i>Pulls</a></li>
                    <li><a href=" {{ url('admin/pull/result') }}"><i class="fa fa fa-list"></i></i>Results</a></li>


                </ul>
            </li>



            <li>
                <a href="{{URL::to('admin/contact-us')}}">
                    <i class="fa fa fa-tv"></i> <span> Contact Us</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('admin/faq')}}">
                    <i class="fa fa fa-tv"></i> <span> Faq  </span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('admin/news')}}">
                    <i class="fa fa fa-tv"></i> <span> News  </span>
                </a>
            </li>

            <li>
                <a href="{{URL::to('admin/popular/video')}}">
                    <i class="fa fa fa-tv"></i> <span> Popular Video  </span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('admin/document')}}">
                    <i class="fa fa fa-tv"></i> <span> Documents  </span>
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
                    <li><a href=" {{ url('admin/post') }}"><i class="fa fa fa-list"></i></i>All Posts</a></li>
                    <li><a href=" {{ url('admin/categories') }}"><i class="fa fa fa-list"></i></i>Category</a></li>


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
                    <li><a href=" {{ url('admin/playlist') }}"><i class="fa fa fa-list"></i></i>Playlist</a></li>
                    <li><a href=" {{ url('admin/categories') }}"><i class="fa fa fa-list"></i></i>Category</a></li>


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
                    <li><a href=" {{ url('admin/user/create') }}"><i class="fa fa-circle-o"></i>Create User</a></li>
                    <li><a href=" {{ url('admin/users') }}"><i class="fa fa-circle-o"></i>All Users</a></li>
                    <li><a href=" {{ url('admin/website/user') }}"><i class="fa fa-circle-o"></i>Website User</a></li>


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
                    <li><a href=" {{ url('admin/page/create') }}"><i class="fa fa-circle-o"></i>Add New Page </a>
                    </li>
                    <li><a href=" {{ url('admin/pages') }}"><i class="fa fa-circle-o"></i>All Pages </a></li>


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
                    <li><a href=" {{ url('admin/app-setting') }}"><i class="fa fa-circle-o"></i>Default Setting</a>
                    </li>
                    <li><a href=" {{ url('admin/homepage/setting') }}"><i class="fa fa-circle-o"></i>Home Page Setting</a></li>
                    <li hidden ><a  href=" {{ url('admin/social/setting') }}"><i class="fa fa-circle-o"></i>Social Media Setting</a></li>
                    <li><a href=" {{ url('/clear-cache') }}"><i class="fa fa-circle-o"></i>clear-cache</a></li>
                </ul>
            </li>


        <?php } ?>


    </ul>
    </section>
    <!-- /.sidebar -->
</aside>
