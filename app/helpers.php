<?php

function get_option($key)
{
    $result = DB::table('options')->select('option_value')->where('option_name', $key)->first();
    if ($result) {
        return $result->option_value;
    }
}


function get_single_option()
{
    $result = DB::table('deafult_seating')->where('default_setting_id','=',1)->first();
    if ($result) {
        return $result;
    }
}

function get_api()
{
    $result=DB::table('app_seating')->select('live_url')->where('app_setting_id',1)->first();

    if($result){
        return $result->live_url;
    }
}


function get_bd_api()
{
    $result=DB::table('app_seating')->select('live_url_bd')->where('app_setting_id',1)->first();

    if($result){
        return $result->live_url_bd;
    }
}
function get_footer_data(){

    $result=DB::table('app_seating')->select('ios_app_link','google_app_id','twitter','facebook','instagram_id','youtube_chanel','contact_address','contact_phone','linkedIn','ios_app_link')->where('app_setting_id',1)->first();

    if($result){
        return $result;
    }
}


?>
