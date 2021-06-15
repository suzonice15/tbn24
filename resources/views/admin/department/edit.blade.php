@extends('layouts.master')
@section('pageTitle')
    All Categoreis  List
@endsection
@section('mainContent')
    <div class="box-body">
<form id="containerForm" class="form app-lb-ajax-form bv-form" data-multipart="true" enctype="multipart/form-data" action="{{ url('admin/departments/update') }}/{{ $department->department_id }}" method="post" novalidate="novalidate">
    @csrf
         <div   class="row">
            <div class="clearfix  form-horizontal">
                <div  class="row" style="
    margin-left: -2px;
    margin-right: -4px;">


                    <div  style="justify-content: center" class="col-md-8 col-sm-12">

                        <div class="box box-primary" style="border: 2px solid #ddd;">
                            <div class="box-header" style="background-color: #bdbdbf;">

                                <h3 class="box-title">Basic Department Information<span class="required"></span></h3>
                            </div>
                            <div class="box-body">

                                <div class="form-group">
                                    <label class="control-label col-md-3" for="pro_name">Department  Name</label>
                                    <div class="col-md-9">
                                        <input required autocomplete="off" type="text" maxlength="150"
                                               class="form-control" id="department_name" name="department_name"
                                               placeholder="Department Name" value="{{$department->department_name}}">

                                    </div>
                                </div>






                                <div class="form-group pull-right" style="margin-right: 5px">
                                    <input type="submit" value="Update " class="btn btn-success" id="save_program_data">


                                </div>

                            </div>
                        </div>

                    </div>




                </div>

            </div>

        </div>



</form>
        </div>

@endsection


