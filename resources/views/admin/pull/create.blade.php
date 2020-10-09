<form id="containerForm" class="form app-lb-ajax-form bv-form" enctype="multipart/form-data"
      action="{{url('/')}}/admin/pulls/store" method="post" novalidate="novalidate">
    @csrf
    <div class="row ">

        <div class="clearfix form-horizontal">



            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="question">Question</label>
                <div class="col-md-6">
                    <input autocomplete="off"   type="text" maxlength="200" value="" class="form-control" id="pull_question" name="pull_question"
                           placeholder="Question" >
                    <p id="pull_question_error" style="color:red"></p>

                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-3" for="expire_time">Expire Time</label>
                <div class="col-md-6">
                    <input  autocomplete="off" required type="text"   class="form-control datepicker" id="pull_expire_time"
                           name="pull_expire_time" placeholder="Expire Time">

                </div>
            </div>

            <div class="form-group has-feedback">
                <form name="add_name" id="add_name">
                    <label class="control-label col-md-3" for="status"></label>
                    <div class="col-md-6">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">
                            <tr>
                                <td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>
                                <td><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus"></i></button></td>
                            </tr>
                        </table>
                    </div>
                    </div>
                </form>
            </div>


            <div class="form-group">
                <label class="control-label col-md-3" for="status">Status</label>
                <div class="col-md-9">
                    <input type="radio" name="pull_status" value="1" id="pull_status">
                    Active
                    <input type="radio"  value="0"  id="pull_status"
                           name="pull_status">
                    Inactive

                </div>
            </div>


            <div class="form-group ">
                <label class="control-label col-md-3" for="status"></label>
                <div class="col-md-4">
                <button type="button" class="btn btn-success" id="save_program_data"><i class="fa fa-save"></i>Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Cancel</button>
            </div>
            </div>


        </div>


    </div>

    <script defer>
        $(document).ready(function(){
            var i=1;
            $('#add').click(function(){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
            });
            $(document).on('click', '.btn_remove', function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });
        });
    </script>


    <script type="text/javascript" defer>


        $(document).ready(function () {

            $(".datepicker").datepicker({ dateFormat: "dd-mm-yyyy", todayHighlight:'TRUE',
                autoclose: true,}).datepicker("setDate", new Date());
            $('#save_program_data').click(function () {
                let pull_question = $('#pull_question').val();
                   if (pull_question =='') {
                    $('#pull_question_error').text('This Field Must be fillup');
                    return false;
                } else {
                    $('#pull_question_error').text('');
                }
                $("#containerForm").submit(); // Submit the form
            });
        });
    </script>



</form>

