<?php $__env->startSection('mainContent'); ?>
<div class="box-body">
    <div class="row">
        <div class="col-md-3">
            <button type="button" class="btn btn-success" data-toggle="modal" id="add_modal" data-target="#add-schedule">
                <i class="fa fa-plus"></i>Add New
            </button>
            <a onclick="Grid_tab1_1600763452_download()" class="btn   btn-success"><i class="fa fa-download"></i> Download CSV</a>

        </div>
        <div class="col-md-4">
            <div class="col-md-4">

            <label>Program</label>
                </div>
            <div class="col-md-8">
            <select class="form-control select2" id="program_id_id" name="program_id_id">


                <?php if($programs): ?>
                    <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                        <option value="<?php echo e($program->id); ?>"><?php echo e($program->program_name); ?></option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </select>
                </div>


        </div>

        <div class="col-md-3">
            <div class="col-md-3">
                <label>Date</label>
            </div>
            <div class="col-md-9">
                <input type="text" maxlength="" value="" class="form-control datepicker" id="schedule_date_using_ajax"
                       name="schedule_date" placeholder="Date" >
            </div>


        </div>

        <div class="col-md-2">


                <button type="button"    class="btn   btn-info" id="search"
                       name="search" value="Search" ><i class="fa fa-search"> </i>Search</button>

        </div>

    </div>
    <br/>
    <div class="table-responsive">

        <table  class="table table-bordered table-striped   ">
            <thead>
            <tr>
                <th>Sl</th>
                <th>Program</th>
                <th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Chat Enabled</th>

                <th>Action</th>
            </tr>
            </thead>
            <tbody>

               <?php echo $__env->make('admin.schedule.pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </tbody>

        </table>

    </div>

    <div class="modal fade" id="add-schedule">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-weight: bold">&times;</span></button>
                    <h4 class="modal-title" style="text-align:center">New Daily Schedule
                    </h4>
                </div>
                <div class="modal-body" id="append_data">

                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>


    <div class="modal fade" id="edit-program">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-weight: bold">&times;</span></button>
                    <h4 class="modal-title" style="text-align:center">Edit Program</h4>
                </div>
                <div class="modal-body" id="append_edit_data">

                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->

    </div>


    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />

<script>
    $(document).ready(function(){

        function fetch_data(page)
        {
          $.ajax({
                type:"GET",
                url:"<?php echo e(url('schedules/pagination')); ?>?page="+page,
                success:function(data)
                {
                    $('tbody').html('');
                    $('tbody').html(data);
                }
            })
        }

        function fetch_data_by_program(program_id,schedule_date)
        {
            $.ajax({
                type:"GET",
                url:"<?php echo e(url('schedules/pagination_by_program_id')); ?>?program_id="+program_id+"&schedule_date="+schedule_date,
                success:function(data)
                {
                    $('tbody').html('');
                    $('tbody').html(data);
                }
            })
        }

        $(document).on('click', '#search', function(){
            var program_id = $('#program_id_id').val();
            var schedule_date = $('#schedule_date_using_ajax').val();

            fetch_data_by_program(program_id,schedule_date);

        });


        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            $('#hidden_page').val(page);
         //   var program_id = $('#program_id_id').val();
            fetch_data(page);
        });


$('#add_modal').click(function () {
    $.ajax({
        type:"GET",
        url:"<?php echo e(url('admin/schedules/create')); ?>",
        success:function(data)
        {
             $('#append_data').html(data)
        }
    })
});





    });
</script>





<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/schedule/index.blade.php ENDPATH**/ ?>