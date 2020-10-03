
    @include('layouts.includes.header');
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->

    @include('layouts.includes.sidebar');


  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              <?php if(isset($main) ) {  echo $main ; }    ?>

          </h1>
          {{--<marquee class="btn btn-info">--}}
          {{----}}
          {{--</marquee>--}}
          <ol class="breadcrumb">
              <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">  <?php if(isset($active) ) {  echo $active ; }    ?></li>
          </ol>
      </section>

    <!-- Main content -->
    <section class="content">
        @if(Session::has('success'))
            <div class="callout callout-success">


                <h4>
                    {{ Session::get('success')}}

                </h4>
            </div>
        @elseif(Session::has('error'))
            <div class="callout callout-danger">
                <h4>Error !</h4>

                <h4>
                    {{ Session::get('error')}}

                </h4>
            </div>
        @else

        @endif



      <!-- Default box -->
      <div class="box box-success">
       
          @yield('mainContent')

      </div>
      <!-- /.box -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong> &copy; Copyright  2015-<?=date('Y')?> Isolutions</a> All rights
        reserved </strong>
    </footer>


    <div class="control-sidebar-bg"></div>
</div>

@include('layouts.includes.footer');
