<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use  Cart;
use Session;
use AdminHelper;
use URL;
use File;
use Image;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct()
    {
        $time_zone=  get_time_zone()->app_time_zone;
        date_default_timezone_set($time_zone);
    }
    public function index()
    {

    }


    public function store(Request $request){
        
        $data['name'] = $request->name;
        $data['email'] = $request->email;       
        $data['phone'] = $request->phone;
        $data['remember_token'] = time().rand(1,5000);
        $ip = \Request::ip();
        $details = json_decode(file_get_contents("https://api.ipdata.co/{$ip}?api-key=test"));
        $data['country'] = $details->country_name;
        $data['city'] = $details->city;
        $data['continent_name'] = $details->continent_name;
        $data['region'] = $details->region;
        $data['ip'] = $ip;
        $data['password'] = md5($request->password);
        $customer_email=  DB::table('users')->where('email',$request->email)->first();
        $customer_phone=  DB::table('users')->where('phone',$request->phone)->first();
        if($customer_email){
            return redirect('customer/form')
                ->with('error', 'This email all ready registered');
        }
        if($customer_phone){
            return redirect('customer/form')
                ->with('error', 'This Phone number  all ready registered');
        }





        $result = DB::table('users')->insertGetId($data);
        if ($result) {
            Session::put('user_id', $result);
            Session::put('name', $request->name);
            Session::put('phone', $request->phone);
            Session::put('email', $request->email);
            return redirect('/')
                ->with('success', 'created successfully wait for admin approved');
        } else {
            return redirect('customer/form')
                ->with('error', 'No successfully.');
        }
    }

    public function myprofile_save(Request $request){

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;

        $data['country'] = $request->country;
        $data['address'] = $request->address;
        $data['city'] = $request->city;
        $data['continent_name'] = $request->continent_name;
        $data['region'] = $request->region;
        if($request->password) {
            $data['password'] = md5($request->password);
        }
        
        $result = DB::table('users')->where('id',Session::get('user_id'))->update($data);
        if ($result) {
           
            return redirect('/myaccount')
                ->with('success', 'You have saved your changes!');
        } else {
            return redirect('myaccount')
                ->with('error', 'You have not saved your changes!');
        }
    }




    public function sign_up_form()
    {
$user_id=Session::get('user_id');
        if($user_id) {
        return redirect('customer/login');
        } else {
            return view('website.customer.sign_up_form');
        }
    }

    public  function login(){

//       $all_count= file_get_contents("https://restcountries.eu/rest/v2/all");
//        
        $user_id=Session::get('user_id');
        if($user_id) {
            return redirect('/myaccount');
        } else {

            return view('website.customer.login_form');
        }
    }
    public function login_check(Request $request)
    {
        $email = $request->email;
        $password = md5($request->password);
        $result = DB::table('users')->where('email', $email)->where('password', $password)->first();
        if ($result) {
            $id = $result->id;
            $email = $result->email;
            $name = $result->name;
            Session::put('user_id', $id);
            Session::put('email', $email);
            Session::put('name', $name);
            Session::put('user_picture', $result->picture);
            return redirect('/');

        } else {
            return view('website.customer.login_form', ['error' => 'Your Email Or Password Invalid Try Again']);
        }

    }

    public function  myaccount(){
 
        $user_id=Session::get('user_id');
        if($user_id) {
            $data['user']=DB::table('users')->where('id',$user_id)->first();
            return view('website.customer.my_profile',$data);
        } else {
            return redirect('customer/login');
        }

    }
    public function  password_changed(){
        $user_id=Session::get('user_id');

        $user_id=Session::get('user_id');
        if($user_id) {
           
            return view('website.customer.password_changed');
        } else {
            return redirect('customer/login');
        }

    }
    public function password_changed_store(Request $request){

        $password = md5($request->password);
        $user_id=Session::get('user_id');

      $check_exitntin_user=  DB::table('users')->where('id',$user_id)->where('password',$password)->first();
        if($check_exitntin_user){
            $data['password'] = md5($request->new_password);
            $result = DB::table('users')->where('id',Session::get('user_id'))->update($data);
            return redirect('/customer/password/changed')
                ->with('success', 'Password Changed Successfully');

        } else {

            return redirect('/customer/password/changed')
                ->with('error', 'Old Password does not matched');

        }
    }



    public function  photo_changed(){
        $user_id=Session::get('user_id');

        $user_id=Session::get('user_id');
        if($user_id) {

            return view('website.customer.photo_changed');
        } else {
            return redirect('customer/login');
        }

    }
    public function photo_changed_store(Request $request){

         $user_id=Session::get('user_id');
        $image = $request->file('user_picture');
        if ($image) {

            $random='customer'.rand(1,2140).time();
            $image_name = $random.'.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/uploads/users');

            $resize_image = Image::make($image->getRealPath());

            $resize_image->resize(200, 200, function ($constraint) {

            })->save($destinationPath . '/' . $image_name);


            $data['picture'] = $image_name;

            Session::put('user_picture',$image_name);
        }


        $checked=  DB::table('users')->where('id',$user_id)->update($data);
        if($checked){

            return redirect('customer/photo/changed')
                ->with('success', 'Picture Changed Successfully');

        } else {

            return redirect('customer/photo/changed')
                ->with('error', 'Picture does not Successfully');

        }
    }




    public function five_minite_check(){

       echo  $user_id=Session::get('user_id');
         if($user_id){
             echo $user_id;
         } else {
             echo '';
         }
     }
    public function one_hour_check(){
        echo  $user_id=Session::get('user_id');
    }
    public function logout()
    {
        Session::put('user_id', '');
        $url = URL::current();
        return redirect('/customer/login')->with('success', 'You are successfully Logout !')->with('current', $url);;
    }

}
