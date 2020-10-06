
<form id="containerForm" class="form app-lb-ajax-form bv-form" data-multipart="true" enctype="multipart/form-data" action="{{url('/')}}/admin/category/store" method="post" novalidate="novalidate">
    @csrf
    <div class="row ">

        <div class="clearfix form-horizontal">

            <div class="row">
                <div class="col-md-10 col-sm-8">


                    <div class="form-group has-feedback">
                        <label class="control-label col-md-3" for="pro_name">Name</label>
                        <div class="col-md-9">
                            <input type="text" maxlength="150" value="" class="form-control" id="category_title" name="category_title" placeholder="Name"  >
                            <p style="color:red" id="category_title_error"></p>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="status">Status</label>
                        <div class="col-md-9">
                            <select class="form-control" id="status" name="status">

                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group pull-right">
                        <button type="button" class="btn btn-success" id="save_program_data"><i class="fa fa-save"></i>Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Cancel</button>
                    </div>
                </div>




            </div>

        </div>

    </div>

</form>


    <script type="text/javascript">

    $(document).ready(function() {
            $('#save_program_data').click(function () {
                let category_title=  $('#category_title').val();

                if(category_title ==''){

                    $('#category_title_error').text('This Field Must be fillup');
                    return false;
                } else {
                    $('#category_title_error').text('');


                }

                $("#containerForm").submit(); // Submit the form


        });
        });

    </script>




