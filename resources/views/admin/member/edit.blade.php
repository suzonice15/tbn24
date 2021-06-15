@extends('layouts.master')
@section('pageTitle')
    All Categoreis  List
@endsection
@section('mainContent')
    <div class="box-body">
<form id="containerForm" class="form app-lb-ajax-form bv-form" data-multipart="true" enctype="multipart/form-data" action="{{ url('admin/members/update') }}/{{ $member->member_id }}" method="post" novalidate="novalidate">
    @csrf
    <div class="row">
        <div class="clearfix form-horizontal">
            <div class="row" style="
    margin-left: -2px;
    margin-right: -4px;">
                <div class="col-md-12 col-sm-12">
                    <div class="box box-primary" style="border: 2px solid #ddd;">
                        <div class="box-header" style="background-color: #bdbdbf;">
                            <h3 class="box-title">Basic Member Information<span class="required"></span></h3>
                        </div>
                        <div class="box-body">

                            <div class="form-group">
                                <label class="control-label col-md-3" for="pro_name">Member Name</label>
                                <div class="col-md-9">
                                    <input required autocomplete="off" type="text" maxlength="150" value="{{$member->member_name}}"
                                           class="form-control" id="member_name" name="member_name"
                                           placeholder="Member Name">

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3" for="pro_name">Member Parmalink</label>
                                <div class="col-md-9">
                                    <input type="text" maxlength="150"  value="{{$member->member_parmalink}}" class="form-control"
                                           id="member_parmalink"
                                           name="member_parmalink" placeholder="">
                                    <p style="color:red" id="member_parmalink_error"></p>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="pro_name">Member Status</label>
                                <div class="col-md-9">
                                    <input type="text" maxlength="150"  value="{{$member->member_status}}" class="form-control"
                                           id="member_status"
                                           name="member_status" placeholder="">
                                    <p style="color:red" id="member_parmalink_error"></p>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="pro_name">Member Advice</label>
                                <div class="col-md-9">

                                          <textarea class="form-control " rows="3" name="member_advise"
                                                    id="member_advise"> {{$member->member_advise}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3" for="pro_name">Member Advice Name</label>
                                <div class="col-md-9">
                                    <input type="text"   value="{{$member->member_advise_name}}" class="form-control"
                                           id="member_status"
                                           name="member_advise_name" placeholder="">
                                    <p style="color:red" id="member_parmalink_error"></p>

                                </div>
                            </div>



                            <div class="form-group ">
                                <label class="control-label col-md-3" for="pro_name">Member Description</label>
                                <div class="col-md-9">
                                      <textarea class="form-control ckeditor" rows="10" name="member_description"
                                                id="member_description"> {{$member->member_description}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3" for="status">Department</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="department_id" name="department_id">

                                        <?php if($departments) {

                                        foreach ($departments as $department) {
                                        ?>
                                        <option value="{{$department->department_id}}">{{$department->department_name}}</option>
                                        <?php } }?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3" for="status">Picture</label>
                                <div class="col-md-9">
                                    <input type="file" name="member_picture" class="form-control">
                                    <?php if($member->member_picture){ ?>
                                    <img  width="50" src="{{url('/')}}/public/uploads/member/{{$member->member_picture}}">

                                    <?php }?>
                                </div>
                            </div>


                            <div class="form-group pull-right" style="margin-right: 5px">
                                <input type="submit" class="btn btn-success" id="save_program_data">


                            </div>

                        </div>
                    </div>

                </div>



            </div>

        </div>

    </div>

</form>
        </div>

<script type="text/javascript">

    document.forms['containerForm'].elements['department_id'].value = "{{ $member->department_id }}";



</script>

@endsection


