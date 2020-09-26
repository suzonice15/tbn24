@extends('layouts.master')

@section('mainContent')

    <div class="box-body">


        <div class="col-sm-offset-0 col-md-12">
            <form  name="category" action="{{ url('admin/app-setting')  }}" class="form-horizontal"
                   method="post"
                   enctype="multipart/form-data">
                @csrf


                    <!-- /.box-header -->
                    <div class="box-body" style="padding: 28px;">
                        <div class="form-group ">
                            <label for="site_title">App Timezone</label>
                            <input type="text" class="form-control" name="app_time_zone" id="app_time_zone"
                                   value="{{$setting_row->app_time_zone}}">
                        </div>
                        <div class="form-group ">
                            <label for="phone">Facebook App ID</label>
                            <input type="text" class="form-control" name="facebook" id="facebook"
                                   value="{{$setting_row->facebook}}">
                        </div>
                        <div class="form-group ">
                            <label for="phone">Google App ID</label>
                            <input type="text" class="form-control" name="google_app_id" id="google_app_id"
                                   value="{{$setting_row->google_app_id}}">
                        </div>
                        <div class="form-group ">
                            <label for="phone">Instagram ID</label>
                            <input type="text" class="form-control" name="instagram_id" id="instagram_id"
                                   value="{{$setting_row->instagram_id}}">
                        </div>

                        <div class="form-group ">
                            <label for="phone">Live URL</label>
                            <input type="text" class="form-control" name="live_url" id="live_url"
                                   value="{{$setting_row->live_url}}">
                        </div>
                        <div class="form-group ">
                            <label for="phone">Live URL BD</label>
                            <input type="text" class="form-control" name="live_url_bd" id="live_url_bd"
                                   value="{{$setting_row->live_url_bd}}">
                        </div>
                        <div class="form-group ">
                            <label for="phone">Program Start Type</label>
                            <input type="text" class="form-control" name="program_start_type" id="program_start_type"
                                   value="{{$setting_row->program_start_type}}">
                        </div>
                        <div class="form-group ">
                            <label for="phone">      Youtube Channel ID</label>
                            <input type="text" class="form-control" name="youtube_chanel" id="youtube_chanel"
                                   value="{{$setting_row->youtube_chanel}}">
                        </div>









                    </div>




                <div class="box-footer">
                    <input type="submit" class="btn btn-success pull-left" value="Update">

                </div>
            </form>


            </form>
        </div>
    </div>



@endsection


