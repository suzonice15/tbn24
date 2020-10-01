<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use  Session;
use Illuminate\Support\Facades\Redirect;

use AdminHelper;
use DB;
use URL;
class DashboardController extends Controller
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
        $this->middleware('AdminLoginCheck');
    }

    public function index()
    {
      

     
    $user_id=1;
        $user_id = 1;//AdminHelper::Admin_user_autherntication();
        $url = URL::current();

        if ($user_id < 1) {
            //  return redirect('admin');
            Redirect::to('admin')->with('redirect', $url)->send();

        }


 // $data['orders']= DB::table('order_data')->select('order_total','order_status')->get();
            $today = date('Y-m-d');
            $data['new'] = 'dd';

            return view('layouts.dashboard', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
