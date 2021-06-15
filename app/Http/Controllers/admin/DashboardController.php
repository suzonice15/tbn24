<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use  Session;
use Illuminate\Support\Facades\Redirect;

use AdminHelper;
use DB;
use URL;
use Carbon\Carbon;

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

        $data['main'] = 'Dashboard';
        $data['active'] = 'Dashboard';
              $status= Session::get('id');
         if(!$status)
         {
            return redirect('/admin');
         }


// curent proggram
        $data['current_program'] = DB::table('programs')
            ->select('programs.program_name','programs.program_image','start_time','end_time')
            ->join('schedules', 'schedules.program_id', '=', 'programs.id')
            ->whereDate('schedule_date', '=', date('Y-m-d'))
            ->where('start_time', '<=', date('H:i'))
            ->where('end_time', '>=', date('H:i'))
            ->orderBy('start_time', 'asc')->first();
       
       
 $data['total_programs']= DB::table('programs')->select('id')->count();
 $data['total_users']= DB::table('users')->select('id')->count();
 $data['message']= DB::table('contacts')->select('status')->where('status','=',0)->count();
 $data['today_schedule']= DB::table('schedules')->select('id')->whereDate('schedule_date', Carbon::now()->format('Y-m-d'))->count();


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
