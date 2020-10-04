
    <?php echo $__env->make('layouts.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->

    <?php echo $__env->make('layouts.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;


  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              <?php if(isset($main) ) {  echo $main ; }    ?>

          </h1>
          
          
          
          <ol class="breadcrumb">
              <li><a href="<?php echo e(url('/')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">  <?php if(isset($active) ) {  echo $active ; }    ?></li>
          </ol>
      </section>

    <!-- Main content -->
    <section class="content">
        <?php if(Session::has('success')): ?>
            <div class="callout callout-success">


                <h4>
                    <?php echo e(Session::get('success')); ?>


                </h4>
            </div>
        <?php elseif(Session::has('error')): ?>
            <div class="callout callout-danger">
                <h4>Error !</h4>

                <h4>
                    <?php echo e(Session::get('error')); ?>


                </h4>
            </div>
        <?php else: ?>

        <?php endif; ?>



      <!-- Default box -->
      <div class="box box-success">
       
          <?php echo $__env->yieldContent('mainContent'); ?>

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

<?php echo $__env->make('layouts.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php /**PATH C:\xampp\htdocs\tbn24\resources\views/layouts/master.blade.php ENDPATH**/ ?>