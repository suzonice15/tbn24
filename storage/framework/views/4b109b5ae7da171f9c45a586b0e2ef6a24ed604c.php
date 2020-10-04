

<?php $__env->startSection('mainContent'); ?>
    <div class="box-body">

        <br/>
        <div class="table-responsive">

            <table  class="table table-bordered table-striped   ">
                <thead>
                <tr>

                    <th >Sl</th>

                    <th width="50%">Poll</th>
                    <th>Vote Count</th>
                    <th>Total Vote</th>
                    <th>Created Date</th>
                    <th>Expire Date</th>

                </tr>
                </thead>
                <tbody>

                <?php echo $__env->make('admin.pull.pull_result_pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </tbody>

            </table>

        </div>

        <div class="modal fade" id="add-program">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="font-weight: bold">&times;</span></button>
                        <h4 class="modal-title" style="text-align:center">New Poll</h4>
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

                function fetch_data(page, query)
                {
                    $.ajax({
                        type:"GET",
                        url:"<?php echo e(url('pulls/pagination')); ?>?page="+page+"&query="+query,
                        success:function(data)
                        {
                            $('tbody').html('');
                            $('tbody').html(data);
                        }
                    })
                }

                $(document).on('keyup input', '#serach', function(){
                    var query = $('#serach').val();
                    var page = $('#hidden_page').val();
                    if(query.length >0) {
                        fetch_data(page, query);
                    } else {
                        fetch_data(1, '');
                    }
                });


                $(document).on('click', '.pagination a', function(event){
                    event.preventDefault();
                    var page = $(this).attr('href').split('page=')[1];
                    $('#hidden_page').val(page);
                    var query = $('#serach').val();
                    fetch_data(page, query);
                });


                $('#add_modal').click(function () {
                    $.ajax({
                        type:"GET",
                        url:"<?php echo e(url('admin/pulls/create')); ?>",
                        success:function(data)
                        {
                            $('#append_data').html(data)
                        }
                    })
                });





            });
        </script>





<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tbn24\resources\views/admin/pull/pull_result.blade.php ENDPATH**/ ?>