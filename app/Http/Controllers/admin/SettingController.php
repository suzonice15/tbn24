<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use  Session;
use Image;
use AdminHelper;
use URL;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Arr;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homePageSetting(Request $request)
    {
        $user_id = AdminHelper::Admin_user_autherntication();
        $url = URL::current();

        if ($user_id < 1) {
            //  return redirect('admin');
            Redirect::to('admin')->with('redirect', $url)->send();

        }

//unset($request->_token);
        $all_home_page_data = $request->all();
        if ($all_home_page_data) {
            Arr::forget($all_home_page_data, '_token');
            foreach ($all_home_page_data as $key => $val) {
                $data['option_name'] = $key;
                $data['option_value'] = $val;


                $single_result = DB::table('options')->select('option_name')->where('option_name', $key)->get();

                if (count($single_result) > 0) {
                    DB::table('options')->where('option_name', $key)->update($data);


                } else {
                    DB::table('options')->insert($data);


                }
            }
        }
        $data['main'] = 'Setting';
        $data['active'] = 'Update Setting';
        $data['title'] = '  ';
        return view('admin.setting.home_page_setting', $data);

    }

//    public function defaultSetting(Request $request)
//    {
//        $user_id = AdminHelper::Admin_user_autherntication();
//        $url = URL::current();
//
//        if ($user_id < 1) {
//            //  return redirect('admin');
//            Redirect::to('admin')->with('redirect', $url)->send();
//
//        }
//
//
////unset($request->_token);
//        $all_home_page_data = $request->all();
//        if ($all_home_page_data) {
//            Arr::forget($all_home_page_data, '_token');
//            foreach ($all_home_page_data as $key => $val) {
//                $data['option_name'] = $key;
//                $data['option_value'] = $val;
//
//
//                $single_result = DB::table('options')->select('option_name')->where('option_name', $key)->get();
//
//                if (count($single_result) > 0) {
//                    DB::table('options')->where('option_name', $key)->update($data);
//
//
//                } else {
//                    DB::table('options')->insert($data);
//
//                }
//            }
//        }
//        $data['main'] = 'Setting';
//        $data['active'] = 'Update Setting';
//        $data['title'] = '  ';
//        return view('admin.setting.deafualt_setting', $data);
//
//    }

    public function defaultSetting(Request $request)
    {
        $user_id = AdminHelper::Admin_user_autherntication();
        $url = URL::current();

        if ($user_id < 1) {
            //  return redirect('admin');
            Redirect::to('admin')->with('redirect', $url)->send();

        }
        $setting_row = DB::table('deafult_seating')->where('default_setting_id', 1)->first();


        $row_data['phone']= $request->phone;
        $row_data['phone_order']= $request->phone_order;
        $row_data['shipping_charge_in_dhaka']= $request->shipping_charge_in_dhaka;
        $row_data['shipping_charge_out_of_dhaka']= $request->shipping_charge_out_of_dhaka;
        $row_data['default_product_terms']= $request->default_product_terms;
        $row_data['bkash']= $request->bkash;
        $row_data['address']= $request->address;

        $image = $request->file('logo');
        if ($image) {

            $old_logo=$setting_row->logo;
            if($old_logo){
                $main_image=public_path().'/uploads/'.$old_logo;
                if(file_exists($main_image)){
                    @unlink($main_image);
                }

            }

            $image_name =date("d-m-Y") .'logo'. '.'  . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/');
            $resize_image = Image::make($image->getRealPath());
            $resize_image->save($destinationPath . '/' . $image_name);
            $row_data['logo'] = $image_name;
        }

        $icon = $request->file('icon');
        if ($icon) {

            $old_logo=$setting_row->icon;
            if($old_logo){
                $main_image=public_path().'/uploads/'.$old_logo;

                if(file_exists($main_image)){

                    @unlink($main_image);

                }

            }

            $icon_image_name = date("d-m-Y") . '.' . $icon->getClientOriginalExtension();

            $destinationPath = public_path('/uploads/');

            $resize_image = Image::make($icon->getRealPath());

            $resize_image->save($destinationPath . '/' . $icon_image_name);


            $row_data['icon'] = $icon_image_name;
        }

                    DB::table('deafult_seating')->where('default_setting_id', 1)->update($row_data);




        $data['main'] = 'Setting';
        $data['setting_row'] =$setting_row;
        $data['active'] = 'Update Setting';
        $data['title'] = '  ';
        return view('admin.setting.deafualt_setting', $data);

    }


    public function appSetting()
    {
        $user_id = 1;
        $url = URL::current();

        if ($user_id < 1) {
            //  return redirect('admin');
            Redirect::to('admin')->with('redirect', $url)->send();

        }
        $setting_row = DB::table('app_seating')->where('app_setting_id', 1)->first();
//        if($request) {
//            $row_data['app_time_zone'] = $request->app_time_zone;
//            $row_data['facebook'] = $request->facebook;
//            $row_data['google_app_id'] = $request->google_app_id;
//            $row_data['instagram_id'] = $request->instagram_id;
//            $row_data['live_url'] = $request->live_url;
//            $row_data['live_url_bd'] = $request->live_url_bd;
//            $row_data['program_start_type'] = $request->program_start_type;
//            $row_data['youtube_chanel'] = $request->youtube_chanel;
//
////        $image = $request->file('logo');
////        if ($image) {
////
////            $old_logo=$setting_row->logo;
////            if($old_logo){
////                $main_image=public_path().'/uploads/'.$old_logo;
////                if(file_exists($main_image)){
////                    @unlink($main_image);
////                }
////
////            }
////
////            $image_name =date("d-m-Y") .'logo'. '.'  . $image->getClientOriginalExtension();
////            $destinationPath = public_path('/uploads/');
////            $resize_image = Image::make($image->getRealPath());
////            $resize_image->save($destinationPath . '/' . $image_name);
////            $row_data['logo'] = $image_name;
////        }
////
////        $icon = $request->file('icon');
////        if ($icon) {
////
////            $old_logo=$setting_row->icon;
////            if($old_logo){
////                $main_image=public_path().'/uploads/'.$old_logo;
////
////                if(file_exists($main_image)){
////
////                    @unlink($main_image);
////
////                }
////
////            }
////
////            $icon_image_name = date("d-m-Y") . '.' . $icon->getClientOriginalExtension();
////
////            $destinationPath = public_path('/uploads/');
////
////            $resize_image = Image::make($icon->getRealPath());
////
////            $resize_image->save($destinationPath . '/' . $icon_image_name);
////
////
////            $row_data['icon'] = $icon_image_name;
////        }
//
//            DB::table('app_seating')->where('app_setting_id', 1)->update($row_data);
//            //return redirect('admin/app-setting');
//        }




        $data['main'] = ' App Setting List ';
        $data['setting_row'] =$setting_row;
        $data['active'] = ' App Setting List ';
        $data['title'] = '  ';
        return view('admin.setting.app_setting', $data);

    }

    public function appSetting_store(Request $request){

        $row_data['app_time_zone'] = $request->app_time_zone;
        $row_data['facebook'] = $request->facebook;
        $row_data['google_app_id'] = $request->google_app_id;
        $row_data['instagram_id'] = $request->instagram_id;
        $row_data['live_url'] = $request->live_url;
        $row_data['live_url_bd'] = $request->live_url_bd;
        $row_data['program_start_type'] = $request->program_start_type;
        $row_data['youtube_chanel'] = $request->youtube_chanel;
        $row_data['google_map'] = $request->google_map;
        $row_data['contact_phone'] = $request->contact_phone;
        $row_data['contact_address'] = $request->contact_address;
        $row_data['contact_email'] = $request->contact_email;
        DB::table('app_seating')->where('app_setting_id', 1)->update($row_data);
         return redirect('admin/app-setting');
    }

    public function socialSetting(Request $request)
    {
        $user_id = AdminHelper::Admin_user_autherntication();
        $url = URL::current();

        if ($user_id < 1) {
            //  return redirect('admin');
            Redirect::to('admin')->with('redirect', $url)->send();

        }


//unset($request->_token);
        $all_home_page_data = $request->all();
        if ($all_home_page_data) {
            Arr::forget($all_home_page_data, '_token');
            foreach ($all_home_page_data as $key => $val) {
                $data['option_name'] = $key;
                $data['option_value'] = $val;


                $single_result = DB::table('options')->select('option_name')->where('option_name', $key)->get();

                if (count($single_result) > 0) {
                    DB::table('options')->where('option_name', $key)->update($data);


                } else {
                    DB::table('options')->insert($data);

                }
            }
        }
        $data['main'] = 'Setting';
        $data['active'] = 'Update Setting';
        $data['title'] = '  ';
        return view('admin.setting.social_media_setting', $data);


}



}
